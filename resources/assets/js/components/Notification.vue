<template lang="html">
  <div>

  </div>
</template>

<script>
  export default {
    mounted(){
      this.listen()
    },

      // http: {
      //        root: '/root',
      //        headers: {
      //            'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      //        }
      //    },

    props: ['id'],

    methods:{
      listen(){
        Echo.private('App.User.' + this.id)
            .notification((notification) => {
              noty({
                  type: 'success',
                  layout: 'topRight',
                  text: notification.message
              })

              this.$store.commit('add_not',notification)

              document.getElementById("noty_audio").play()
            })
      }
    }
  }
</script>

<style lang="css">
</style>
