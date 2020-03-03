  <template>
    <div class="container-fluid">
        <div class="row justify-content-center py-3 ">
            <button v-on:click="discard" id="discard" class="btn btn-danger m-2">Отменить</button>
            <button v-on:click="change_flag" id="change_flag" class="btn btn-dark m-2">Включить редактирование</button>
            <button v-on:click="save" id="save" class="btn btn-success m-2">Сохранить</button>
            <draggable v-model="institutes" :disabled="disabled">
			    <transition-group>
			        <div class="grab_item d-flex justify-content-between my-1" v-for="institute in institutes" :key="institute.id">
			            {{institute.name}} <button v-on:click="modal_delete_show(institute)" class="btn btn-danger">x</button>
			        </div>
			    </transition-group>
			</draggable>

            <div id="delete_institute" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete_institute_modal_title" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                            <div class="form-group col-12">
                               <label for="name" class="col col-form-label">Повторите название департамента: </label>
                               <input type="text" min="0" class="form-control" v-on:input="check_delete_institute_flag" v-model="confirm_name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end align-items-center">
                        <button :disabled="delete_institute_flag" v-on:click="deleteInstitute" type="button" class="btn btn-danger">Удалить</button>
                    </div>

                </div>
              </div>
            </div>

        </div>
    </div>
</template>

<script>
	import draggable from 'vuedraggable'

    export default {
        components: {
            draggable,
        },
        props:['institutes_json'],
        data:function(){
            return{
                institutes: JSON.parse(this.institutes_json),
                institutes_back: JSON.parse(this.institutes_json),
                disabled: true,

                institute_name: '',
                institute_id: '',
                confirm_name: '',

                delete_institute_flag: true,
            }
        },
        mounted() {
        },
        computed: {
        },
        methods: {
            change_flag(){
                if(this.disabled==false){
                $('#change_flag').removeClass('btn-warning').addClass('btn-dark');
                $('#change_flag').html("Включить редактирование");
                $('.grab_item').css('cursor','auto');
                    this.disabled=true;
                }
                else{
                $('#change_flag').removeClass('btn-dark').addClass('btn-warning');
                $('#change_flag').html("Выключить редактирование");
                $('.grab_item').css('cursor','grab');
                    this.disabled=false;   
                }
            },
            discard(){
                this.institutes = this.institutes_back;
                this.save();
            },
            save(){
                if(this.disabled==false)this.change_flag();
                console.log(this.institutes);
                axios.post('/admin/institutes/updatePosition', {
                    institutes: this.institutes,
                })
                .then((response) => {
                    console.log(response);
                    this.institutes = response.data;
                })
                .catch((error) => {
                    console.log(response)
                })
            },
            check_delete_institute_flag(){
              if(this.institute_name.toLowerCase() == this.confirm_name.toLowerCase())this.delete_institute_flag=false;
              else this.delete_institute_flag=true;
            },
            modal_delete_show(institute){
                $("#delete_institute").modal('show');
                this.institute_name = institute.name;
                this.institute_id = institute.id;
            },
            deleteInstitute(){
                this.save();
                axios.post('/admin/institutes/'+ this.institute_id +'/delete', {
                })
                .then((response) => {
                    console.log(response);
                    this.institutes_back = response.data;
                    this.institutes = response.data;
                    this.confirm_name = '';
                    $('#delete_institute').modal('hide');
                })
                .catch((error) => {
                    console.log(response)
                })
            }
        }
    }
</script>