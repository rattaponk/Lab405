<template>
    <div class="body">
        <div class="container">
            <div class="login">
                <div class="login-screen">
                    <div class="app-title">
                        <h1>Register</h1>
                    </div>
                     <div class="login-form">
                    <form @submit.prevent="validateBeforeSubmit">
                        <!-- <p>Let's create a new account!</p> -->
                        <div class="control-group">
                            <input name="name" v-model="user.name" type="text" placeholder="Full Name" class="form-control" v-validate="'required|alpha_spaces|min:5'" :class="{'input': true, 'is-danger': errors.has('user.name') }">
                            <p v-show="errors.has('name')" style="color: red;font-size:small;">{{ errors.first('name') }}</p>
                        </div>
                        <div  class="control-group">
                            <input name="email" v-model="user.email" type="text" placeholder="E-mail" class="form-control" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('user.email') }">
                            <p v-show="errors.has('email')" style="color: red;font-size:small;">{{ errors.first('email') }}</p>
                        </div>
                        <div class="control-group">
                            <input name="password" v-model="user.password1" type="password" placeholder="Password" class="form-control" v-validate="'required'" :class="{'input': true, 'is-danger': errors.has('user.password1') }">
                            <p v-show="errors.has('password')" style="color: red;font-size:small;">{{ errors.first('password') }}</p>
                        </div>
                        <div class="control-group">
                            <input name="Re-Password" v-model="user.password2" type="password" placeholder="Re-Password" class="form-control" v-validate="'required|confirmed:password'" :class="{'input': true, 'is-danger': errors.has('user.password2') }" data-vv-as="password">
                            <p v-show="errors.has('Re-Password')" style="color: red;font-size:small;">{{ errors.first('Re-Password') }}</p>
                        </div>
                        <div class="control-group">
                            <input name="facebook" v-model="user.facebook" type="text" placeholder="facebook" class="form-control" v-validate="'url|regex:.*(facebook).*'" :class="{'input': true, 'is-danger': errors.has('user.facebook') }">
                            <p v-show="errors.has('facebook')" style="color: red;font-size:small;">{{ errors.first('facebook') }}</p>
                        </div>
                        <div class="control-group">
                            <input name="birthdate" v-model="user.birthdate" type="text" placeholder="Birth date: DD/MM/YYYY" v-validate="'date_format:DD/MM/YYYY|date_between:' + mindate + ',' + maxdate " :class="{'input': true, 'is-danger': errors.has('user.birthdate') }">
                            <p v-show="errors.has('birthdate')" style="color: red">{{ errors.first('birthdate') }}</p>
                        </div>
                        <div class="control-group">
                            <input name="phone" v-model="user.phone" type="text" placeholder="Phone" v-validate="'numeric'" :class="{'input': true, 'is-danger': errors.has('user.phone') }">
                            <p v-show="errors.has('phone')" style="color: red">{{ errors.first('phone') }}</p>
                        </div>
                        <button class="btn bth-cl btn-info btn-large btn-block">Sign Up</button>
                    </form>
                    <span>or go back to <router-link to="/login">login</router-link>.</span>
                     </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import firebase from 'firebase';
    import {
        db
    } from '@/firebaseConfig'
    import Vue from 'vue';
    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);
    VeeValidate.Validator.extend('passphrase', {
        getMessage: field => 'Sorry dude, wrong pass phrase.',
        validate: value => value.toUpperCase() == 'Demogorgon'.toUpperCase()
    });
    var md5 = require('md5');
    let usersRef = db.ref('users');
    let Nowdate = new Date()
    export default {
        name: 'signUpValidate',
        data() {
            return {
                user: {
                    name: '',
                    email: '',
                    password1: '',
                    password2: '',
                    facebook: '',
                    phone: '',
                    birthdate: '',
                },
                mindate: Nowdate.getDate() + '/' + (Nowdate.getMonth() + 1) + '/' + (Nowdate.getFullYear() - 100),
                maxdate: Nowdate.getDate() + '/' + (Nowdate.getMonth() + 1) + '/' + Nowdate.getFullYear(),
            }
        },
        methods: {
            validateBeforeSubmit() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.signup();
                    }
                });
            },
            signup() {
                firebase.auth().createUserWithEmailAndPassword(this.user.email, this.user.password1).then(
                    user => {
                        alert('Your accound has been created!');
                        var newUser = this.addUserInfo();
                        this.$router.push({
                            name: 'Bookmarker'
                        });
                    },
                    error => {
                        var errorCode = error.code;
                        var errorMsg = error.message;
                        if (errorCode == 'auth/weak-password') {
                            alert('The password is too week');
                        } else {
                            alert('Oops.' + errorMsg);
                        }
                    }
                );
            },
            addUserInfo() {
                var newUser = {
                    name: this.user.name,
                    email: this.user.email,
                    phone: this.user.phone,
                    facebook: this.user.facebook,
                    birthdate: this.user.birthdate
                }
                var uid = md5(this.user.email);
                console.log(uid);
                db.ref('users/' + uid).set(newUser);
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
        padding: 50px;
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

