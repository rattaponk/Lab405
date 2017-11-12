import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VeeValidate from 'vee-validate';
Vue.use(VueResource);
Vue.use(VeeValidate);
Vue.http.options.root = 'https://project405-bba3f.firebaseio.com';

new Vue({
    el: '#app',
    render: h => h(App)
})