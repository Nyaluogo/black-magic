<template>

  <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gallery</h3>
          	<hr>
				<div class="row mt">
          <div v-for= "image in images">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
              <div class="project-wrapper">
                          <div class="project">
                              <div class="photo-wrapper">
                                  <div class="photo">
                                    <a class="fancybox" href="assets/img/portfolio/port04.jpg"><img class="img-responsive" src="assets/img/portfolio/port04.jpg" alt=""></a>
                                  </div>
                                  {{ image.description }}.
                                  <div class="overlay"></div>
                              </div>
                          </div>
                      </div>
            </div><!-- col-lg-4 -->
          </div>



				</div><!-- /row -->

		</section><!--/wrapper -->







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
