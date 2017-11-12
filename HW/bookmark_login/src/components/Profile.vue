<template>
  <div>
    <appHeader></appHeader>
    <div class="row">
      <div class="col-sm-4"> .</div>
      <div class="col-sm-4">
        <div class="container">
          <h2>User information:</h2>
          <div v-if="user.photoURL">
            <p>Profile Photo:</p>
            <img :src="user.photoURL" style="height: 120px">
          </div>
          <br>
          <p v-if="user.name">Name: {{ user.name }}</p>
          <p>Email: {{ user.email }}</p>
          <p>Facebook: {{ user.facebook }}</p>
          <p>Phone: {{ user.phone }}</p>
          <p>Birthdate: {{ user.birthdate }}</p>
          <!-- <button class="btn btn-primary" @click="logout">Logout</button> -->
        </div>
      </div>
      <div class="col-sm-4"> .</div>
    </div>
  </div>
</template>

<script>
  import firebase from 'firebase';
  import Header from './Header.vue';
  import {
    db
  } from '@/firebaseConfig'
  var md5 = require('md5');
  export default {
    name: 'Profile',
    components: {
      appHeader: Header
    },
    data() {
      return {
        user: {
          photoURL: '',
          userId: '',
          name: '',
          email: '',
          facebook: '',
          phone: '',
          birthdate: ''
        }
      }
    },
    methods: {
      logout() {
        firebase.auth().signOut().then(() => {
          this.$router.push({
            name: 'Login'
          });
        })
      }
    },
    created() {
      var user = firebase.auth().currentUser;
      if (user) {
        this.user.photoURL = user.photoURL;
        this.user.userId = user.uid;
        this.user.name = user.displayName;
        this.user.email = user.email;
        this.user.birthdate = user.birthdate;
        var uid = md5(user.email);
        console.log(uid);
        db.ref('users/' + uid).once('value').then(
          snapshot => {
            if (snapshot) {
              console.log(snapshot);
              this.user.name = snapshot.val().name;
              this.user.facebook = snapshot.val().facebook;
              this.user.phone = snapshot.val().phone;
              this.user.birthdate = snapshot.val().birthdate;
            }
          });
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style src="../assets/css/bootstrap.min.css" />

</style>