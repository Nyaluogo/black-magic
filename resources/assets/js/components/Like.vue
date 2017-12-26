 <template>
    <div>
        <hr>
<!--
        <p class="text-center" v-for= "like in post.likes">
            <img :src="like.user.avatar" alt="" width="30px" height="30px" class="avatar-like" >
        </p> 

        <hr>
-->


        <button class="btn-xs btn-primary" v-if="!auth_user_likes_post" @click="like()" >
            Like {{ likers_count }}
        </button>
        <button class="btn-xs btn-danger" v-else @click="unlike()">
            Unlike {{ likers_count }}
        </button>
        <span></span>
    </div>
 </template>

 <script>
     export default{
         mounted(){

         },

         props: ['id'],
         
        data(){
            return{
                // likes:this.post.likes
            }
        },

         computed:{
             post(){
                 return this.$store.state.posts.find((post) => {
                     return post.id === this.id
                 })
             },
             likers(){
                 var likers = []

                 this.post.likes.forEach((like) => {
                     likers.push(like.user.id)
                 })

                 return likers
             },
             likers_count(){
                 var likers = []

                 this.post.likes.forEach((like) => {
                     likers.push(like.user.id)
                 })

                 return likers.length
             },
            auth_user_likes_post(){
                var check_index = this.likers.indexOf(this.$store.state.auth_user.id)

                if(check_index == -1)
                    return false
                else
                    return true
            }
         },

         methods:{
             like(){
                 this.$http.get('/like/' + this.id)
                    .then((resp) => {
                        this.$store.commit('update_post_likes',{
                            id: this.id,
                            like: resp.body
                        })
                    })
             },
             unlike(){
                 this.$http.get('/unlike/' + this.id)
                    .then((response) => {
                        this.$store.commit('unlike_post',{
                            post_id: this.id,
                            like_id:response.body
                        })
                    })
             }
         }
     }
 </script>

 <style>
     .avatar-like{
         border-radius: 50%;
     }
 </style>