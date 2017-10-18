<template>
  <div>
    <h3> ServerStatus Component:</h3>
    <p> Server Status : {{status}} - <button @click="changeStatus">Change Status</button></p>
    </br>
  </div>
</template>

<script>
export default {
  data() {
    return {
      status: "Normal"
    }
  },
  methods: {
    changeStatus() {
      if (this.status == "Normal") {
        this.status = "Critical";
      } 
      else this.status = "Normal";
    }
  },
}
</script>

<style>

</style>

