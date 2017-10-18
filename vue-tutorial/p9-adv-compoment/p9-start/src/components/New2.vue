<template>
  <div>
    <div class="title">
      <slot name="title"></slot>

      <!-- setup default content here !!!-->
      <span style="color: #000000"><slot name="subtitle">The subtitle</slot></span>
    
    </div>
    <hr>
    <div>
      <!-- <slot name="content"></slot> -->
    </div>
  </div>
</template>
<script>

</script>

<style scoped>
    div {
        border: 1px solid #FFFFFF;
        background-color: #FFADAB;
        padding: 30px;
        margin: 20px auto;
        text-align: center
    }
</style>