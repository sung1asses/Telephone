<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['numbers_json','intitutes_json'],
        data:function(){
            return{
                status: JSON.parse(this.operator_status),
                main_list: [],
                search_list: [],
            }
        },
        mounted() {
        },
        methods: {
            make_main_list(){
                let numbers = JSON.parse(this.numbers_json);
                let intitutes = JSON.parse(this.intitutes_json);
                $.each(intitutes, function(key, value){
                    this.main_list.push(key);
                    console.log(this.main_list);
                    // foreach(number in numbers)
                })
            }
        }
    }
</script>
