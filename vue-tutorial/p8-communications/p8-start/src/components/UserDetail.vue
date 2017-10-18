<template>
    <div class="component">
        <h3>You may view the User Details here</h3>
        <p>Many Details</p>
        <h4>Name: {{uName}}</h4>
        <h4>Age: {{uAge}}</h4>
        <p>I'm an awesome User!</p>     
        <button @click="resetName">Reset Name in Component</button>
        <button @click="resetFn()">Reset Name From Parent</button>
    </div>
</template>

<script>
import { eventBus } from '../main'

export default {
    props: {
        uName: {//มีการ validate
            type: String,
            default: 'Unkwon'
        },
        uAge: {
            type: Number,
            default: 10
        },
        resetFn:Function
    },
    data() {
        return {
            name: this.uName,
            age: this.uAge,
        }
    },
    methods: {
        resetName() {
            this.name = 'Testttt';  
            this.$emit('nameWasReset', this.name);
        }
    },
}
</script>

<style scoped>
div {
    background-color: lightcoral;
}
</style>
