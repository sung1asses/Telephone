<template>
    <div class="container-fluid">
        <div class="row justify-content-center py-3 ">
            <div class="col-8 mx-auto">
                <input class="search-aues w-100 m-3 p-2" v-on:input="filteredList" type="text" v-model="search" placeholder="Поиск..." autofocus="true">
            </div>
        </div>
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-12">
                  <table class="table d-md-table d-none sticky-top text-center">
                    <thead class="thead-aues">
                      <tr class="row">
                        <th class="col-1 d-flex justify-content-center align-items-center" scope="col">Внутренние номера</th>
                        <th class="col-4 d-flex justify-content-center align-items-center" scope="col">Ф.И.О.</th>
                        <th class="col-3 d-flex justify-content-center align-items-center" scope="col">Должность</th>
                        <th class="col-1 d-flex justify-content-center align-items-center" scope="col">Кабинет</th>
                        <th class="col-3 d-flex justify-content-center align-items-center" scope="col">E-mail</th>
                      </tr>
                    </thead>
                  </table>
                  <table v-for="item in search_list" class="table text-center">
                    <thead class="thead-aues">
                      <tr class="row">
                        <th scope="col" class="col">{{ item.name }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="number in item.numbers" class="border-bottom-aues row">
                        <th class="col-md-1 col-12 d-md-table-cell d-flex justify-content-between align-middle" scope="row"><span class="mr-auto d-md-none d-block">Внутренний номер: </span>{{ number.local_number }}</th>
                        <th class="col-md-4 col-12 d-md-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-md-none d-block">Ф.И.О.: </span>{{ number.name }}</th>
                        <th class="col-md-3 col-12 d-md-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-md-none d-block">Должность: </span>{{ number.position }}</th>
                        <th class="col-md-1 col-12 d-md-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-md-none d-block">Кабинет: </span>{{ number.cabinet }}</th>
                        <th class="col-md-3 col-12 d-md-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-md-none d-block">E-mail: </span>{{ number.email }}</th>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['institutes_json'],
        data:function(){
            return{
                search: '',
                main_list: JSON.parse(this.institutes_json),
                search_list: [],
            }
        },
        mounted() {
          this.filteredList();
        },
        computed: {
            
        },
        methods: {
            filteredList() {
                const value = this.search.toLowerCase();
                this.search_list = this.main_list.filter(institute => {
                      return institute.name.toLowerCase().indexOf(value) > -1 && 
                      institute.numbers.length!=0
                    })
                this.main_list.forEach(item => {
                    let elements = item.numbers.filter(number => {
                        return number.name.toLowerCase().indexOf(value) > -1 ||
                        number.position.toLowerCase().indexOf(value) > -1 ||
                        number.cabinet.toLowerCase().indexOf(value) > -1 ||
                        number.local_number.toLowerCase().indexOf(value) > -1
                    })
                    if(elements.length > 0){
                        let new_item = {'name': item.name};
                        new_item.numbers = elements;
                        this.search_list.push(new_item);
                    }
                })
            }
        }
    }
</script>
