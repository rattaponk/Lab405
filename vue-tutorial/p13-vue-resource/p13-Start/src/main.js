import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'

Vue.use(VueResource);
Vue.http.options.root = 'https://project405-bba3f.firebaseio.com';
// Vue.http.interceptors.push((request, next) => {
//     console.log(request);
//     if (request.method == 'POST') {
//         request.method = 'PUT';
//     }
//     next();
// });
Vue.http.interceptors.push((request, next) => {
    console.log(request);
    if (request.method == 'POST') {
        request.method = 'PUT';
    }
    next(response => { // this will intercept all reponses
        console.log(response.body);
        response.json = () => { return { messages: response.body } } // replace with an object with a key
    });
});
new Vue({
    el: '#app',
    render: h => h(App)
})