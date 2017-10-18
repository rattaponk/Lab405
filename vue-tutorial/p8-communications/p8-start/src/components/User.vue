<template>
    <div class="component">
        <h1>The User Component</h1>
        <h4>Name: {{name}}</h4>
        <h4>Age: {{age}}</h4>
        <p>I'm an awesome User!</p>
        <button @click="changeName"> Change my name</button>
        <button @click="resetName"> Reset my name</button>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <app-user-detail
                v-bind:uName="name"
                v-bind:uAge="age"
                @nameWasReset="name=$event"                
                :resetFn="resetName"
                >
                    
                </app-user-detail>
            </div>
            <div class="col-xs-12 col-sm-6">
                <app-user-edit @nameWasSet="name=$event"></app-user-edit>
            </div>
        </div>
    </div>
</template>

<script>
    import UserDetail from './UserDetail.vue';
    import UserEdit from './UserEdit.vue';

    export default {
        data() {
            return {
                name: "Kornkamon Suttitanawat",
                age: 22
            }
        },
        methods: {
            changeName() {
                this.name="TunasanG"
            },
            resetName(){
                this.name="Kornkamon Suttitanawat"
            }
            
        },
        components: {
            appUserDetail: UserDetail,
            appUserEdit: UserEdit
        }
    }
</script>

<style scoped>
    div {
        background-color: lightblue;
    }
</style>
