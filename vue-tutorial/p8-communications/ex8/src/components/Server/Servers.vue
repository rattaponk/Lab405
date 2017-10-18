<template>
    <div class="col-xs-12 col-sm-6">
        <ul class="list-group">
            <ul class="list-group">
            <!-- passing each server data to Server component -->
            <app-server  v-for="server in servers" :serv="server" :key="server.id"></app-server>
            </ul>
        </ul>
    </div>
</template>

<script>
import Server from './Server.vue';
import { serverBus } from '../../main';
export default {
    data: function() {
        return {
            servers: [
                { id: 1, status: 'Normal'},
                { id: 2, status: 'Critical'},
                { id: 3, status: 'Unknown'},
                { id: 4, status: 'Normal'},
                { id: 5, status: 'Normal'},
                { id: 6, status: 'Critical'},
                { id: 7, status: 'Normal'}
            ]
        };
    },
    components: {
        appServer: Server
    },
    created() {
        serverBus.$on('TurnStatus', (serv) => {
            console.log(serv.id);
            this.servers[serv.id-1].status=serv.status;            
        })
        //  serverBus.$on('TurnBack', (serv) => {
        //     console.log(serv.id);
        //     this.servers[serv.id-1].status=serv.status;            
        // })
    }
}
</script>

<style>

</style>
