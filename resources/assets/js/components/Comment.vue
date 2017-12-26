<template>
    <div class="container">
         <!-- <div class="row clearfix"> -->
            <!-- <div class="col-md-8 col-md-offset-2 "> -->
                <div class="panel panel-default ">
                    <div class="panel-body  ">
                         <hr>
                        <p class="text-center" v-for="comment in post.comment">
                            <img :src="comment.user.avatar" alt="" width="20px" height="20px" class="avatar-comment">
                            {{ comment.comment }}
                        </p>
                        <hr>
                        <textarea name="" id="" cols="" rows="2" class="form-control" v-model="content"></textarea>
                        <br>
                        <button class="btn btn-success pull-right" :disabled="not_working" @click="comment()" >
                            Comment
                        </button>
                     </div>
                </div>
            <!-- </div> -->
         <!-- </div> -->
    </div>
</template>

<script>
    export default{
        mounted(){
            this.get_thread()
        },
        props: ['id'],

        computed: {
            commenters(){
                var commenters = []

                this.post.comment.forEach((comment) => {
                    commenters.push(comment.user.id)
                })
                return commenters
            },

            auth_user_commented_post(){
                var check_index = this.commenters.indexOf(
                    this.$store.state.auth_user_id
                )

                if(check_index == -1)
                    return false
                else
                    return true
            },

            post(){
                return this.$store.state.posts.find((post) => {
                    return post.id === this.id
                })
            },

            comments(){
                 return this.$store.getters.all_comments
             },
        },


         data(){
            return{
                content: '',
                not_working: true
            }
        },

        methods: {

            comment(){
                this.$http.post('/create/comment/' + this.id,{content: this.content})
                .then((resp) => {
                    this.content = ''
                      this.$store.commit('update_post_comments',{
                        id: this.id,
                        comment: resp.body
                    })
                    noty({
                        type: 'success',
                        layout: 'topRight',
                        text: 'Comment submitted!'
                    })
                    console.log(resp)
                })
            },

            get_thread(){
                this.$http.get('/commentThread/' + this.id)
                .then((response) => {
                    response.body.forEach((comment) => {
                        this.$store.commit('add_comment',comment)
                    })
                })
            }
        },

        watch:{
            content(){
                if(this.content.length > 0)
                    this.not_working = false
                else
                    this.not_working = true
            }
        }


    }
</script>

<style>
    .avatar-comment{
        border-radius: 50%;
    }
</style>
