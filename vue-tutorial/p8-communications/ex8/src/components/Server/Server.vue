<template>
    <li
            class="list-group-item"
            style="cursor: pointer"
            @click="serverSelected" >
        Server {{serv.id}} Status:{{serv.status}}
    </li>
</template>

<script>
    import { serverBus } from '../../main';

    export default {
        props: ["serv"],// get passed data
        data(){
            return{
                server:this.serv
            }
        } ,   
        methods: {
            serverSelected() {
                serverBus.$emit('ShowSever',this.server);
                // send data to ServerDetail
            }
        }
    }
</script>

<style>

</style>
