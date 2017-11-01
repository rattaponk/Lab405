<template>
    <div>
        <appHeader></appHeader>
        <div class="container" style="margin-top:30px">
            <div class="jumbotron">
                <h2>Bookmark Your Favorite Sites</h2>
                <form @submit.prevent="validateBeforeSubmit">
                     <label>Site Name</label>
                    <input name="name" v-model="bookmark.name" type="text" placeholder="Website Name" class="form-control"
                        v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('bookmark.name') }">
                    <p v-show="errors.has('name')" style="color: red;font-size:small;" >{{ errors.first('name') }}</p>
                    
                     <label>Site URL</label>
                    <input name="url" v-model="bookmark.URL" type="url" placeholder="Website URL" class="form-control"
                        v-validate="'required|url'" :class="{'input': true, 'is-danger': errors.has('bookmark.URL') }">
                    <p v-show="errors.has('url')" style="color: red;font-size:small;" >{{ errors.first('url') }}</p>
                    
                    <button class="btn btn-primary" >Submit</button>
                </form>
            </div>
            <div class="row marketing">
                <div class="col-lg-12">
                    <div id="bookmarksResults" v-for="(u,index) in bookmarks" :key="u.URL">
                        <div class="well">
                            <h3>{{u.name}}
                                <a class="btn btn-default" target="_blank" :href="u.URL">Visit</a>
                                <a class="btn btn-danger" @click="DeleteData(index)">Delete</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button @click="logout">Logout</button> -->
        <footer class="footer">
            <p>&copy; 2016 Bookmarker, Inc.</p>
        </footer>
    </div>
</template>

<script>
    import Header from './Header.vue';

    export default {
        components: {
            appHeader: Header,
        },
        data() {
            return {
                bookmark: {
                    name: "",
                    URL: "",
                    id:""
                },
                bookmarks: []
            }
        },
        methods: {
            validateBeforeSubmit() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.submit();
                    }
                });
            },
            submit() {
                this.$http.post('https://project405-bba3f.firebaseio.com/bookmarks.json', this.bookmark)
                    .then(response => { // define how to deal with the response
                        //console.log(response);
                        this.fetchData();
                    }, error => { // define how to deal with error
                        var errorCode = error.code;
                        var errorMsg = error.message;
                        if (errorCode == 'auth/weak-password') {
                            alert('The password is too week');
                        } else {
                            alert('Oops.' + errorMsg);
                        }
                    });
            },
            fetchData() {
                this.$http.get('https://project405-bba3f.firebaseio.com/bookmarks.json')
                    .then(response => {
                        return response.json(); // return an a javascript object
                    })
                    .then(data => { // define what to do with the returned javascript object
                        const resultArray = [];
                        for (let key in data) {
                            resultArray.push(data[key]);
                        }
                        this.bookmarks = resultArray; // trigger Vue.js to update the DOM
                    });
            },
            DeleteData(index) {
                this.bookmarks.splice(index, 1);
                this.$http.put('https://project405-bba3f.firebaseio.com/bookmarks.json', this.bookmarks)
                    .then(response => { // define how to deal with the response
                        //console.log(response);
                        this.fetchData();
                    }, error => { // define how to deal with error
                        var errorCode = error.code;
                        var errorMsg = error.message;
                        if (errorCode == 'auth/weak-password') {
                            alert('The password is too week');
                        } else {
                            alert('Oops.' + errorMsg);
                        }
                    });
            }
        },
        created: function() {
            this.fetchData()
        }
    }
</script>

<style src="../assets/css/bootstrap.min.css" />

</style>

