<template>
  <div id="app">
    <img src="./assets/logo.png">
    <hello></hello>
    <hr>
    <app-hello></app-hello>
    <hr>
     <hello></hello>
    <hr>
    <h1> Hello H1 </h1>
    <button @click="increase"> increase </button>
    <p>Value: {{value}}</p>
  </div>
</template>

<script>
import Hello from './components/Hello'

export default {
  name: 'app',
  components: {
    Hello,
    'app-hello':Hello
  },
  data: function() { //es5
    return {
      title: 'Title App ',
      value: 0
    }
  },
  methods:{
    increase:function(){
      this.value++;
    }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
