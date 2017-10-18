<template>
    <div id='servers'>
        <div class="col-xs-12 col-sm-6">
            <ul class="list-group">
                <li class="list-group-item" v-for="index in 5" v-bind:key="index">
                    Server #{{ index }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
  name: 'servers',
}
</script>
