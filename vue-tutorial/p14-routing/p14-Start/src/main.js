import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import { routes } from './routes'; // routes.js

Vue.use(VueRouter);

const router = new VueRouter({
    routes: routes, // or just 'routes' in ES6
    mode: 'history' // setting history mode
});

new Vue({
    el: '#app',
    router: router, // or just 'router' in ES6
    render: h => h(App)
})