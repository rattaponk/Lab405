<template>
    <div class="container">
        <app-header></app-header>
        <hr>
        <div class="row">
            <app-servers></app-servers>
            <app-server-details></app-server-details>
        </div>
        <hr>
        <app-footer></app-footer>
    </div>
</template>



<script>
// Template after modification
// <template>
//     <div class="container">
//         <app-header></app-header>
//         <hr>
//         <div class="row">
//             <app-servers></app-servers>
//             <app-server-details></app-server-details>
//         </div>
//         <hr>
//         <app-footer></app-footer>
//     </div>
// </template>
// import local components here!!!
</script>

<script>
import Header from './Header.vue'
import Servers from './Servers.vue'
import ServerDetails from './ServerDetails.vue'
import Footer from './Footer.vue'
export default {
    name: 'container',
    data () {

    },
    methods: {

    },
    components: {
        'app-header': Header,
        'app-servers': Servers,
        'app-server-details': ServerDetails,
        'app-footer': Footer,
    }
}
</script>


<style>

</style>
