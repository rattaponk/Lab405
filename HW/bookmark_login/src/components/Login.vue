<template>
    <div class="body">
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Login</h1>
                </div>
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" v-model="user.username" placeholder="username" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" class="login-field" v-model="user.password" placeholder="password" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <a class="btn bth-cl btn-info btn-large btn-block" @click="login">login</a>
                    <a class="btn bth-cl btn-primary btn-large btn-block" @click="loginFacebook">Facebook</a>
                    <a class="btn bth-cl btn-danger btn-large btn-block" @click="loginGoogle">Google</a>
                    <!-- <router-link to="/about"  class="btn bth-cl btn-warning btn-large btn-block">About</router-link> -->
                    <router-link to="/signup"  class="btn bth-cl btn-default btn-large btn-block">Register</router-link>
                    
                      
                  
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import firebase from 'firebase';
    import Header from './Header.vue';
    export default {
        name: 'login',
        components: {
            appHeader: Header,
            // appFirebaseAuth:FirebaseAuth
        },
        data() {
            return {
                user: {
                    username: '',
                    password: ''
                }
            }
        },
        methods: {
            login() {
                firebase.auth().signInWithEmailAndPassword(this.user.username, this.user.password).then(
                    user => {
                        alert('User authentication successful');
                        this.$router.push({
                            name: 'Bookmarker'
                        });
                    },
                    err => {
                        if (err.code === 'auth/wrong-password') {
                            alert('Wrong password.');
                        } else if (err.code === 'auth/user-not-found') {
                            alert('User not found!');
                        } else if (err.code === 'auth/invalid-email') {
                            alert('Invalid email');
                        } else {
                            alert('Oops. ' + err.message);
                        }
                    }
                ).catch(error => {
                    if (error.code === 'auth/wrong-password') {
                        alert('Wrong password')
                    } else {
                        alert(error.message);
                    }
                })
            },
            loginGoogle() {
                console.log("Google login");
                // Using a popup.
                var provider = new firebase.auth.GoogleAuthProvider();
                provider.addScope('profile');
                provider.addScope('email');
                firebase.auth().signInWithPopup(provider).then(
                    result => {
                        if (result) {
                            // This gives you a Google Access Token.
                            var token = result.credential.accessToken;
                            // The signed-in user info.
                            var user = result.user;
                            console.log('token: ' + token);
                            console.log(user);
                            this.$router.push('/bookmarker');
                        }
                    },
                    err => {
                        alert('Oops. ' + err.message);
                    }
                );
            },
            loginFacebook() {
                console.log("Facebook login");
                var provider = new firebase.auth.FacebookAuthProvider();
                provider.addScope('public_profile');
                provider.setCustomParameters({
                    'display': 'popup'
                });
                firebase.auth().signInWithPopup(provider).then(
                    result => {
                        if (result) {
                            // This gives you a Google Access Token.
                            var token = result.credential.accessToken;
                            // The signed-in user info.
                            var user = result.user;
                            console.log('token: ' + token);
                            console.log(user);
                            this.$router.push('/bookmark');
                        }
                    },
                    err => {
                        alert('Oops. ' + err.message);
                    }
                );
            }
        }
    }
</script>
<style scoped>
    * {
        box-sizing: border-box;
    }
    *:focus {
        outline: none;
    }
    .body {
        font-family: Arial;
        background-color: #3498DB;
        padding: 90px;
    }
    .login {
        margin: 20px auto;
        width: 300px;
    }
    .login-screen {
        background-color: #FFF;
        padding: 20px;
        border-radius: 5px
    }
    .app-title {
        text-align: center;
        color: #777;
    }
    .login-form {
        text-align: center;
    }
    .control-group {
        margin-bottom: 10px;
    }
    input {
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 10px 0;
        width: 250px;
        transition: border .5s;
    }
    input:focus {
        border: 2px solid #3498DB;
        box-shadow: none;
    }
    .bth-cl {
        border: 2px solid transparent;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        box-shadow: none;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
    }
    .login-link {
        font-size: 12px;
        color: #444;
        display: block;
        margin-top: 12px;
    }
</style>


<style src="../assets/css/bootstrap.min.css" />

</style>
