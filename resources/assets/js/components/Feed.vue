
<template>


  <div class="row mt">
  					<div v-for= "post in posts" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
  						<div class="project-wrapper">
  		                    <div class="project">
  		                        <div class="photo-wrapper">
  		                            <div class="photo">
  		                            	<a class="fancybox" :href="'/viewImage/' + post.id"><img class="img-responsive" :src="post.thumb" alt=""></a>
  		                            </div>
                                  <div class="box_comment">
                                    <like :id= "post.id" ></like>
                                  </div>
  		                        </div>
  		                    </div>
  		                </div>
  					</div><!-- col-lg-4 -->



  				</div><!-- /row -->



</template>

<script>

    import Like from './Like.vue'
    import Comment from './Comment.vue'
    import CommentThread from './CommentThread.vue'
    export default{
        mounted(){
                this.get_feed()
            },

        components: {
            Like,
            Comment,
            CommentThread
        },

        methods:{
            get_feed(){
                this.$http.get('/feed')
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


// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }


</script>

<style>
    .avatar-feed{
        border-radius:50%;

    }

</style>
