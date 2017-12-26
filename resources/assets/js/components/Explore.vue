<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="panel panel-default" v-for= "post in posts" >
                    <div class="panel-heading">
                     <a :href="'/profile/' + post.user.slug">
                        <img :src="post.user.avatar" alt="post.user.name" width="40px" height="40px" class = "avatar-feed" >
                        {{post.user.name}}
                    </a>
                        <span class="pull-right">
                            <friend :profile_user_id = "post.user.id"></friend>
                        </span>
                    </div>

                    <p class="text-center">

                         <img :src="post.thumb"  width="500px">
                         <br>
                         {{ post.description }}
                    </p>

                        <like :id= "post.id" ></like>
                        <comment :id = "post.id"></comment>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Like from './Like.vue'
    import Comment from './Comment.vue'
    import CommentThread from './CommentThread.vue'
    import Friend from './Friend.vue'
    export default{
        mounted(){
                this.get_strangers()
            },

        components: {
            Like,
            Comment,
            CommentThread,
            Friend
        },

        methods:{
            get_strangers(){
                this.$http.get('/get_strangers')
                    .then((response) => {
                        response.body.forEach((post) => {
                        this.$store.commit('add_post',post)
                    })
                })
            }
        },

        computed:{
            posts(){
                return this.$store.getters.all_posts
            }
        }
        }

</script>
<style>
    .avatar-feed{
        border-radius:50%
    }
</style>
