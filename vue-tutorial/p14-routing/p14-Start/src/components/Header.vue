<template>
  <ul class="nav nav-pills">
    <!-- <li role="presentation"><router-link to="/">Home</router-link></li>
    <li role="presentation"><router-link to="/user">User</router-link></li> -->

    <!-- <a to="/" tag="li" active-class="active" exact><a>Home</a></a>
    <router-link to="/user" tag="li" active-class="active"><a>User</a></router-link> -->

     <router-link to="/" tag="li" active-class="active" exact><a>Home</a></router-link>
    <router-link to="/user" tag="li" active-class="active"><a>User</a></router-link>
    <router-link to="/user/10" tag="li" active-class="active"><a>User10</a></router-link>
    <router-link to="/user/20" tag="li" active-class="active"><a>User20</a></router-link>
  </ul>
</template>