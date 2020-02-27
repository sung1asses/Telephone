<template>
    <div class="container-fluid">
        <div class="row justify-content-center py-3">
            <div class="col-8 mx-auto">
                <input class="search-aues w-100 m-3 p-1" v-on:input="filteredList" type="text" v-model="search" placeholder="Поиск..." autofocus="true">
            </div>
        </div>

        <div v-if="is_redactor" id="update_number_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="update_number_modal_title" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="update_number_modal_title">Изменить запись</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p class="text-danger" v-if="errors.length">
                    <b>Ошибки:</b>
                    <ul>
                      <li v-for="error in errors">{{ error }}</li>
                    </ul>
                  </p>
                  <div class="row">
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">Почта</label>
                           <input type="text" min="0" class="form-control" v-model="email">
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">ФИО сотрудника</label>
                           <input type="text" min="0" class="form-control" v-model="name">
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">Должность</label>
                           <input type="text" min="0" class="form-control" v-model="position">
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">Кабинет</label>
                           <input type="text" min="0" class="form-control" v-model="cabinet">
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">Внутренний номер</label>
                           <input type="text" min="0" class="form-control" v-model="local_number">
                        </div>
                        <div class="form-group col-sm-6">
                           <label for="name" class="col col-form-label text-md-right">Мобильный номер</label>
                           <input type="text" min="0" class="form-control" v-model="telephone_number">
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button v-on:click="submit_delete_number" type="button" class="btn btn-danger">Удалить</button>
                    <button v-on:click="submit_update_number" type="button" class="btn btn-primary">Изменить</button>
                </div>

            </div>
          </div>
        </div>

        <div v-if="is_redactor" id="update_structure_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="update_structure_modal_title" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="update_structure_modal_title">Изменить запись</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p class="text-danger" v-if="structure_errors.length">
                    <b>Ошибки:</b>
                    <ul>
                      <li v-for="error in structure_errors">{{ error }}</li>
                    </ul>
                  </p>
                  <div class="row">
                        <div class="form-group col">
                           <input type="text" min="0" class="form-control" v-model="structure_name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button v-on:click="submit_update_structure" type="button" class="btn btn-primary">Изменить</button>
                </div>

            </div>
          </div>
        </div>

          <div class="row justify-content-center">
            <div class="col-12">
                <table class="table d-lg-table d-none sticky-top text-center">
                  <thead class="thead-aues">
                    <tr class="row">
                      <th class="col-1 d-flex justify-content-center align-items-center" scope="col">Внутренние номера</th>
                      <th class="col-3 d-flex justify-content-center align-items-center" scope="col">Ф.И.О.</th>
                      <th class="col-3 d-flex justify-content-center align-items-center" scope="col">Должность</th>
                      <th class="col-1 d-flex justify-content-center align-items-center" scope="col">Кабинет</th>
                      <th class="col-2 d-flex justify-content-center align-items-center" scope="col">E-mail</th>
                      <th class="col-2 d-flex justify-content-center align-items-center" scope="col">Сотовый номер</th>
                    </tr>
                  </thead>
                </table>
                <table v-for="item in search_list" class="table text-center">
                  <thead class="thead-aues">
                    <tr v-on:click="update_structure(item)" class="row">
                      <th scope="col" class="col">{{ item.name }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-on:click="update_number(number)" v-for="number in item.numbers" class="border-bottom-aues row">
                      <th class="col-lg-1 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="row"><span class="mr-auto d-lg-none d-block">Внутренний номер: </span>{{ number.local_number }}</th>
                      <th class="col-lg-3 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-lg-none d-block">Ф.И.О.: </span>{{ number.name }}</th>
                      <th class="col-lg-3 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-lg-none d-block">Должность: </span>{{ number.position }}</th>
                      <th class="col-lg-1 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-lg-none d-block">Кабинет: </span>{{ number.cabinet }}</th>
                      <th class="col-lg-2 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-lg-none d-block">E-mail: </span>{{ number.email }}</th>
                      <th class="col-lg-2 col-12 d-lg-table-cell d-flex justify-content-between align-middle" scope="col"><span class="mr-auto d-lg-none d-block">Сотовый номер: </span>{{ number.telephone_number }}</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <!--  -->
    </div>
</template>

<script>
    export default {
        props:['institutes_json', 'is_redactor'],
        data:function(){
            return{
                search: '',
                main_list: JSON.parse(this.institutes_json),
                search_list: [],

                structure_errors: [],
                structure_id: '',
                structure_name: '',


                errors: [],
                id: '',
                email: '',
                name: '',
                position: '',
                cabinet: '',
                local_number: '',
                telephone_number: '',
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
                this.search_list = this.main_list.filter(number => {
                      return number.name.toLowerCase().indexOf(value) > -1
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
            },

            update_structure(structure) {
              if(this.is_redactor){
                $('#update_structure_modal').modal('show');
                this.structure_name = structure.name;
                this.structure_id = structure.id;
              }
            },
            submit_update_structure(){
                this.structure_errors = [];
                if (!this.structure_name) {
                    this.structure_errors.push('Укажите название');
                }
                if (!this.structure_name.length>=255) {
                    this.structure_errors.push('Слишком длинное название.');
                }

                if(!this.structure_errors.length){
                    axios.post('/admin/institutes/'+this.structure_id+'/update', {
                        name: this.structure_name,
                    })
                    .then((response) => {
                      console.log(response);
                      this.main_list = response.data;
                      this.filteredList();
                      $('#update_structure_modal').modal('hide');
                    })
                    .catch((error) => {
                        console.log(response)
                        this.structure_errors.push('Что-то пошло не так, проверьте поля ввода.')
                    })
                }
            },
            update_number(number) {
              if(this.is_redactor){
                $('#update_number_modal').modal('show');
                this.id = number.id;
                this.email = number.email;
                this.name = number.name;
                this.position = number.position;
                this.cabinet = number.cabinet;
                this.local_number = number.local_number;
                this.telephone_number = number.telephone_number;
              }
            },
            submit_update_number(){
                this.errors = [];
                if (!this.name) {
                    this.errors.push('Укажите ФИО.');
                }
                if (!this.name.length>=255) {
                    this.errors.push('Слишком длинное ФИО.');
                }
                if (!this.email.length>=255) {
                    this.errors.push('Слишком длинная Почта.');
                }
                if (!this.position.length>=255) {
                    this.errors.push('Слишком длинная должность.');
                }
                if (!this.cabinet.length>=255) {
                    this.errors.push('Слишком длинный кабинет.');
                }

                if(!this.errors.length){
                    axios.post('/admin/numbers/'+this.id+'/update', {
                        email: this.email,
                        name: this.name,
                        position: this.position,
                        cabinet: this.cabinet,
                        local_number: this.local_number,
                        telephone_number: this.telephone_number,
                    })
                    .then((response) => {
                      console.log(response);
                      this.main_list = response.data;
                      this.filteredList();
                      $('#update_number_modal').modal('hide');
                    })
                    .catch((error) => {
                        console.log(response)
                        this.errors.push('Что-то пошло не так, проверьте поля ввода.')
                    })
                }
            },
            submit_delete_number(){
                this.errors = [];
                axios.post('/admin/numbers/'+this.id+'/delete', {})
                .then((response) => {
                  console.log(response);
                  this.main_list = response.data;
                  this.filteredList();
                  $('#update_number_modal').modal('hide');
                })
                .catch((error) => {
                    console.log(response)
                    this.errors.push('Что-то пошло не так, проверьте поля ввода.')
                })
            }
        }
    }
</script>
