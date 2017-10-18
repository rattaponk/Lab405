<template>
    <div>
        <p>Please select a User</p>
        <hr>
        <div class="row">

            <div class="col-sm-6">
                <h3>Not Route</h3>
                <ul class="list-group">
                    <li class="list-group-item" style="cursor: pointer">User 1</li>
                    <li class="list-group-item" style="cursor: pointer">User 2</li>
                    <li class="list-group-item" style="cursor: pointer">User 3</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h3>Route</h3>
                <ul class="list-group">
                    <router-link tag="li" to="/user/1" class="list-group-item" style="cursor: pointer">User 1</router-link>
                    <router-link tag="li" to="/user/2" class="list-group-item" style="cursor: pointer">User 2</router-link>
                    <router-link tag="li" to="/user/3" class="list-group-item" style="cursor: pointer">User 3</router-link>
                </ul>
            </div>

        </div>

        <hr>

    </div>
</template>