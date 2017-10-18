<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">      
                <h1>Http</h1>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" v-model="user.username">
                </div>
                <div class="form-group">
                    <label>Mail</label>
                    <input type="text" class="form-control" v-model="user.email">
                </div>
                <button class="bth bth-primary" @click="submit">Submit</button>

                <!-- show fetching data in a list -->
                <hr>
                <button class="btn bth-primary" @click="fetchData">Get Data</button>
                <br><br>
                <ul class="list-group">
                    <li class="list-group-item" v-for="u in users" :key="u.email">{{ u.username }} - {{ u.email }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()
        {
            return{
                user:{username:"",email:""},
                users:[]
            }
        },
        methods:{
            submit() {
                this.$http.post('users.json', this.user)
                .then(response => {         // define how to deal with the response
                    console.log(response);
                }, error => {               // define how to deal with error
                    console.log(error);
                });
            },
            fetchData() {
                this.$http.get('users.json')
                .then(response => {
                    return response.json();           // return an a javascript object
                })
                .then(data => {                     // define what to do with the returned javascript object
                    const resultArray = [];
                    for (let key in data) {
                        resultArray.push(data[key]);
                    }
                    this.users = resultArray;         // trigger Vue.js to update the DOM
                });     
            }
        }
        
    }
</script>

<style>
</style>
