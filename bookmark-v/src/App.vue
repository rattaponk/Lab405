<template>
    <div class="container" >
        <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Bookmarker</h3>
        </div>

        <div class="jumbotron">
            <h2>Bookmark Your Favorite Sites</h2>
            <form id="myForm">
            <div class="form-group">
                <label>Site Name</label>
                <input type="text" class="form-control"  placeholder="Website Name" v-model="bookmark.name">
            </div>
            <div class="form-group">
                <label>Site URL</label>
                <input type="text" class="form-control" placeholder="Website URL" v-model="bookmark.URL">
            </div>
            <a class="btn btn-primary" @click="submit">Submit</a>
            </form>
        </div>
        
        <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults" v-for="(u,index) in bookmarks" :key="u.URL" >
            <div class="well">
                    <h3>{{u.name}}
                    <a class="btn btn-default" target="_blank" :href="u.URL">Visit</a>
                    <a class="btn btn-danger" @click="DeleteData(index)" >Delete</a>
                    </h3>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2016 Bookmarker, Inc.</p>
      </footer>
       
    </div>
</template>

<script>
    export default {
        data()
        {
            return{
                bookmark:{name:"",URL:""},
                bookmarks:[]
            }
        },
        methods:{
            submit() {
                this.$http.post('bookmarks.json', this.bookmark)
                .then(response => {         // define how to deal with the response
                    //console.log(response);
                    this.fetchData(); 
                }, error => {               // define how to deal with error
                    console.log(error);
                });
               
            },
            fetchData() {
                this.$http.get('bookmarks.json')
                .then(response => {
                    return response.json();           // return an a javascript object
                })
                .then(data => {                     // define what to do with the returned javascript object
                    const resultArray = [];
                    for (let key in data) {
                        resultArray.push(data[key]);
                    }
                    this.bookmarks = resultArray;         // trigger Vue.js to update the DOM
                });     
            },
            DeleteData(index) {
              this.bookmarks.splice(index, 1);
               this.$http.put('bookmarks.json', this.bookmarks)
                .then(response => {         // define how to deal with the response
                    //console.log(response);
                    this.fetchData(); 
                }, error => {               // define how to deal with error
                    console.log(error);
                });                
            }
        },
    created: function(){
        this.fetchData()
    }
        
    }
</script>

<style>

</style>

