<template>
   <div class="span12 gallery">
    <div class="row">


            <div class="row clearfix">

            <ul class="gallery-post-grid holder">
                    <div v-for= "image in images" >
                    <!-- Gallery Item 1 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a :href="image.path" class="item-zoom-link lightbox" title="Custom Illustration" :data-rel="prettyPhoto"></a>
                                <a :href="image.path" class="item-details-link"></a>
                            </span>
                        </span>
                        <a :href="'/viewImage/' + image.id"><img :src="image.thumb" alt="Gallery" ></a>
                        <span class="project-details"><a :href="'/viewImage/' + image.id">{{ image.title }}</a>

                         {{ image.description }}.


                         </span>

                    </li>
    </div></ul>
</div>
</div>
</div>




</template>

<script>


import Like from './Like.vue'
    import Comment from './Comment.vue'
    import CommentThread from './CommentThread.vue'
    export default{
        mounted(){
                this.get_images()
            },

        components: {
            Like,
            Comment,
            CommentThread
        },

        props: ['profile_user_id'],

        methods:{
            get_images(){
                this.$http.get('/myImages/' + this.profile_user_id)
                    .then((response) => {
                        response.body.forEach((image) => {
                        this.$store.commit('add_image',image)
                    })
                })
            }
        },

        computed:{
            images(){
                return this.$store.getters.all_images
            }
        }
    }


</script>
