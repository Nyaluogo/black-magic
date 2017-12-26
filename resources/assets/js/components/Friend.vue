<template>

        <div>
          <p class= "text-center" v-if="loading">
            Loading...
          </p>

          <p class = "text-center" v-if="!loading">
            <button class="btn btn-sm btn-clear-g" v-if="status == 0" @click="follow">follow</button>
            <!-- <button class="btn btn-success" v-if="status == 'pending'" @click="accept_friend">Follow</button> -->
            <button class="btn btn-sm btn-clear-g" v-if="status == 'following'" @click="unfollow">Unfollow</button>
            <button class="btn btn-sm btn-clear-g" v-if="status == 'following_you'" @click="follow">Follow</button>
            <span class = "text-success" v-if = "status == 'following_you'">this user is following you</span>
            <!-- <span class = "text-success" v-if = "status == 'friends'">Following</span> -->
          </p>
          <p class = "text-center" v-if="!loading">
            <!-- <button class="btn btn-success" v-if="status == 0" @click="follow">error kidogo</button> -->
            <!-- <button class="btn btn-success" v-if="status == 'pending'" @click="accept_friend">Follow</button> -->
            <!-- <button class="btn btn-success" v-if="status == 'following'" @click="unfollow">Unfollow</button>
            <button class="btn btn-success" v-if="status == 'following_you'" @click="follow">Follow</button> -->
            <span class = "text-success" v-if = "status == 'following_you'">this user is following you</span>
            <!-- <span class = "text-success" v-if = "status == 'friends'">Following</span> -->
          </p>

        </div>

</template>

<script>
    export default {
        mounted() {
            this.$http.get('/check_relationship_status/' + this.profile_user_id)
              .then((resp)=>
            {
              console.log(resp)
              this.status = resp.body.status
              this.loading = false
            })
        },

        props: ['profile_user_id'],

        data(){
          return{
            status: '',
            loading: true
          }
        },

        methods: {
          add_friend(){
            this.loading = true
            this.$http.get('/add_friend/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'waiting'
                  noty({
                    type: 'success',
                    layout: 'topRight',
                    theme: 'relax',
                    text: 'Friend request sent.'
                  })
                  this.loading = false
              })
          },

          follow(){
            this.loading = true
            this.$http.get('/follow/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'waiting'
                  noty({
                    type: 'success',
                    layout: 'topRight',
                    theme: 'relax',
                    text: 'You are now following this dude.'
                  })
                  this.loading = false
              })
          },

          unfollow(){
            this.loading = true
            this.$http.get('/unfollow/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'waiting'
                  noty({
                    type: 'success',
                    layout: 'topRight',
                    theme: 'relax',
                    text: 'You are now unfollowing this dude.'
                  })
                  this.loading = false
              })
          },

          accept_friend(){
            this.loading = true
            this.$http.get('/accept_friend/' + this.profile_user_id)
              .then((response)=>{
                if(response.body == 1)
                  this.status == 'friends'
                  noty({
                    type: 'success',
                    layout: 'topRight',
                    text: 'You are now friends.'
                  })
                  this.loading = false
              })
          }
        }
    }
</script>
