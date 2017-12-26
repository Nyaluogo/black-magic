<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="panel panel-default" v-for = "comments in comment">
                    <div class="panel-heading text-center">
                         
                    </div>
                    {{ comments }}
                    <div class="panel-body">
                        <p class="text-center">
                        {{ comments.comment }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        mounted(){
            this.get_thread()
        },

        props: ['id'],

        methods:{
            get_thread(){
                this.$http.get('/commentThread/' + this.id)
                .then((response) => {
                    response.body.forEach((comment) => {
                        this.$store.commit('add_comment',comment)
                    })
                })
            }
        },

        computed:{
             comments(){
                 return this.$store.getters.all_comments
             },
             post(){
                return this.$store.state.posts.find((post) => {
                    return post.id === this.id
                })
            }
        }
    }
</script>