<template>
    <div class="col-xs-12 col-sm-6"> 
        <p>{{server.status}}</p>         
        <hr>
        <button @click="resetStatus">Change to Normal</button>
        <!-- <button @click="BackStatus">Back to Default</button> -->
    </div>

</template>

<script>
    import { serverBus } from '../../main';

    export default {
        data: function() {
            return {
                server: {id:null,status:"Server Details component are currently not updated"},                 
                toggle:0
            }
        },
        methods: {
          resetStatus(){   
             
              if(this.toggle==1)
              {
                  this.toggle=0;
                  this.server.status=this.Bserver_status;
                  serverBus.$emit('TurnStatus',this.server);            
                  
              }else{
                  this.toggle=1;
                  this.Bserver_status=this.server.status;  
                  this.server.status="Normal";
                  serverBus.$emit('TurnStatus',this.server);            
                  
              }
            //   this.server_status=this.server.status;              
          }
        },
        created() {
           serverBus.$on('ShowSever',(serv)=>{
               this.server=serv;
            //    this.server_status=serv.status;
           })
        }
    }
</script>

<style>

</style>
