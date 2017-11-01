<template>
    <div>
        <ul>
            <li><a @click="go_bookmark">Bookmarks</a></li>
            <li><a @click="go_Profile">Profile</a></li>
            <li><a @click="go_About" >About</a></li>
            <li style="float:right"><a @click="logout">logout</a></li>
        </ul>
    </div>
</template>

<script>
    import firebase from 'firebase';
    export default {
        methods: {
            go_Profile() {
                this.$router.push({
                    name: 'Profile'
                });
            },
            go_About() {
                this.$router.push({
                    name: 'About'
                });
            },
            go_bookmark() {
                this.$router.push({
                    name: 'Bookmarker'
                });
            },
            logout() {
                firebase.auth().signOut().then(() => {
                    this.$router.push({
                        name: 'Login'
                    });
                })
            }
        }
    }
</script>

<style scoped>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #3498DB;
        background-color: #3498DB;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: #fff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover:not(.active) {
        background-color: #ddd;
    }
    li a.active {
        color: white;
        background-color: #4CAF50;
    }
</style>