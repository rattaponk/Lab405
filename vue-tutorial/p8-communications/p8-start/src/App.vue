<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <app-user></app-user><!-- เท่ากับ <appUser></appUser>-->
            </div>
        </div>
    </div>
</template>

<script>
    import User from './components/User.vue';

    export default {
        components: {
            appUser: User
        }
    }
</script>

<style>
    div.component {
        border: 1px solid black;
        padding: 30px;
    }
</style>
