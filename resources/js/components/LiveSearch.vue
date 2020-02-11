<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="search-wrapper">
                    <input v-on:input="filteredList" type="text" v-model="search" placeholder="Поиск..."/>
                </div>
                <div>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th class="col-2 align-middle" scope="row">Присвоенные номера</th>
                          <th class="col-2 align-middle" scope="col">Ф.И.О.</th>
                          <th class="col-2 align-middle" scope="col">Подразделение/Должность</th>
                          <th class="col-2 align-middle" scope="col">Кабинет</th>
                          <th class="col-2 align-middle" scope="col">E-mail</th>
                        </tr>
                      </thead>
                    </table>
                    <table v-for="item in search_list" class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th class="text-center" colspan="6" scope="col">{{ item.name }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="number in item.numbers">
                          <th class="col-2 align-middle" scope="row">{{ number.local_number }}</th>
                          <th class="col-2 align-middle" scope="col">{{ number.name }}</th>
                          <th class="col-2 align-middle" scope="col">{{ number.position }}</th>
                          <th class="col-2 align-middle" scope="col">{{ number.cabinet }}</th>
                          <th class="col-2 align-middle" scope="col">{{ number.email }}</th>
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
          console.log(this.main_list)
          this.filteredList();
        },
        computed: {
            
        },
        methods: {
            filteredList() {
                this.search_list = [];
                const value = this.search.toLowerCase();
                this.main_list.forEach(item => {
                    let elements = item.numbers.filter(number => {
                        return number.name.toLowerCase().indexOf(value) > -1 ||
                        number.position.toLowerCase().indexOf(value) > -1 ||
                        number.cabinet.toLowerCase().indexOf(value) > -1
                    })
                    if(elements.length > 0){
                        let new_item = item;
                        new_item.numbers = elements;
                        this.search_list.push(new_item);
                    }
                })

            }
        }
    }
</script>
