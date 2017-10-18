new Vue({
    el: '#exercise',
    data: {
        value: ''
    },
    methods:{
    alertMe:function()
      {
          return alert('Alert!!');
      },
    saveValue:function(event)
      {
          this.value=event.target.value;
      }
    }
});