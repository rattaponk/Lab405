<template>
    <div class="component">
        <h3>You may edit the User here</h3>
        <p>Edit me!</p>
        <p><input type="text" v-model="editName" @keyup="setName"/></p>   
    </div>
</template>

<script>
export default {
    props: {        
        setNameFn:Function
    },
    data() {
        return {
            editName: '' 
        }
    },
    methods: {
        setName() {
            this.uName = 'Testttt';  
            this.$emit('nameWasSet', this.editName);
        }
    },
}
</script>

<style scoped>
    div {
        background-color: lightgreen;
    }
</style>
