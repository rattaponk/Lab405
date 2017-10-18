<template>
    <div>        
        <h1>The User Page</h1>
        <hr>
        <p>Load ID: {{ id }}</p>
        <hr>
        <button @click="navigateToHome" class="btn btn-primary">Go to Home</button>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    data() {
        return {
            // corresponding to the '/usr/:id' route
            // $route NOT $router
            id: this.$route.params.id
        }
    },
    methods: {
        navigateToHome() {
            this.$router.push('/');     // add navigation
        },
        navigateToHome() {
            this.$router.push('/');
            // this.$router.push( { path: '/' })
            // this.$router.push( { name: 'home' })
        }
    },
    watch: {
        // a function passing (new-route, old-route)
        '$route'(to, from) {
            this.id = to.params.id;
        }
    }
}
</script>