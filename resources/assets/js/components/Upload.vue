<template>
    <div id="dropzone">

      <div v-model="input_file">
          <picture-input @change="onChange()" name="image_file" width="500" height="500" margin="16" accept="image/jpeg,image/png">
        </picture-input>
      </div>


        <div class="form-group" v-if="show_form==false">

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" v-model="title" />
                <span  class="error text-danger"></span>
            </div>


            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" class="form-control" v-model="description"></textarea>
                <span  class="error text-danger"></span>
            </div>

            <div class="form-group">
            <label for="watermark">Add Watermark</label>
                <input type="checkbox" id="watermark_check" name = "watermark_check" value="1" v-model="watermark_check">

            </div>

            <div class="form-group">
            <label for="mature_content_option">Does it contain mature content?</label>
                <br>
                <input type="radio" id="yes_mature" value="1" v-model="mature_picked">
                <label for="yes_mature">Yes</label>
                <br>
                <input type="radio" id="no_mature" value="0" v-model="mature_picked">
                <label for="yes_mature">No</label>
                <br>
                <hr>

                <div class="form-group" v-if="mature_picked == true" >
                    <br>
                    <label for="mature_content">Nudity</label>
                    <input type="checkbox" id="nudity" value = "nudity" v-model="mature_content_type" >
                    <br>
                    <label for="mature_content">Sexual themes</label>
                    <input type="checkbox" id="sexual_themes" v-model="mature_content_type" value = "sex_theme">
                    <br>
                    <label for="mature_content">Violence/gore</label>
                    <input type="checkbox" id="violence_gore" v-model="mature_content_type" value = "violence">
                    <br>
                    <label for="mature_content">Strong language</label>
                    <input type="checkbox" id="strong_language" v-model="mature_content_type" value = "language">
                    <br>
                    <label for="mature_content">Ideologically sensitive</label>
                    <input type="checkbox" id="ideologically_sensitive" v-model="mature_content_type" value = "ideologically_sensitive">
                </div>
            </div>


            <div class="form-group">
                <label for="title">Tags:</label>
                <!-- <input type="text" name="tags" class="form-control" v-model="tags" /> -->
                <v-tag-input name="tags" v-model="tags" :separator="separator" class="input" ></v-tag-input>
                <span  class="error text-danger"></span>
                <span class="label label-info">{{tags}}</span>
            </div>


            <div class="form-group">
                <label for="display_options">Display options:</label>
                <select v-model="display_option_selected" name ="display_options" >
                <option disabled value="">Please select one</option>
                <option value = "0">original</option>
                <option value = "1">size:400 pixels wide</option>
                <option value = "2">size:600 pixels wide</option>
                <option value = "3">size:800 pixels wide</option>
                <option value = "4">size:900 pixels wide</option>
                <option value = "5">size:1024 pixels wide</option>
                <option value = "6">size:1280 pixels wide</option>

                </select>
            </div>

            <div class="form-group">
              <label for="category">Category:</label>

                <select v-model="selected_category" name ="selected_category" >
                <option v-for="option in options" v-bind:value="option.value" multiple>
                    {{ option.text }}
                </option>
                </select>
            </div>

            <div class="form-panel">
                 <br>
                <label for="comment_options">Allow comments</label>
                <input type="checkbox" id="comment_options" name= "comment_options" value="1" v-model="comment_options">
                <br>
                <label for="sharing_options">Show share button</label>
                <input type="checkbox" id="sharing_options" name = "sharing_options" value="1" v-model="sharing_options">
                <br>
                <label for="critique_options">Request critique</label>
                <input type="checkbox" id="critique_options" name = "critique_options" value="1" v-model="critique_options">
                <br>
                <label for="download_options">Allow free downloads</label>
                <input type="checkbox" id="download_options" name = "download_options" value="1" v-model="download_options">
                <br>

                <div class="form-group">
                <label for="print_options">Sell Prints?</label>

                  <div class="form-group" v-model="print_options">
                    <br>
                    <input type="radio" id="yes_sell" value="1" name="print_options" v-model="print_options">
                    <label for="yes_mature">Yes</label>
                    <br>
                    <input type="radio" id="no_sell" value="0" name="print_options" v-model="print_options">
                    <label for="yes_mature">No</label>
                    <br>
                  </div>

                    <hr>

                    <div class="form-group" v-if="print_options == 1" v-model="set_price">
                        <br>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" name="price" class="form-control" v-model="price" />
                            <span  class="error text-danger"></span>
                        </div>
                    </div>
                </div>

            </div>

               <label for="agree"><input id="agree" type="checkbox" value="agree" v-model="checked"/> I Agree to the terms and conditions</label>
            <div class="form-group">
                <button :disabled="!checked" type="submit" class="btn btn-success" >Submit</button>
            </div>



        </div>

    </div>
</template>

<script>
    import Dropzone from "vue2-dropzone"
    import VTagInput from 'v-tag-input'
    import PictureInput from 'vue-picture-input'
    import bus from "../bus"
    export default {
        components: {
             VTagInput,
             PictureInput
        },
        props: {
            csrf: {
                type: String
            },
            action: {
                type: String
            },
        },


        data(){
            return{

                    display_option_selected: '',
                    title:'untitled',
                    description:'',
                    watermark_check:'',
                    mature_options: '',
                    mature_picked:'',
                    mature_content_type:'',
                    selected_category: '',
                    tags:[''],
                    separator: '#',
                    comment_options: '',
                    critique_options: '',
                    sharing_options: '',
                    download_options: '',
                    print_options:'',
                    set_price:'',
                    price:'',

                options:[
                    {text:'traditional', value:'traditional'},
                    {text:'digital art', value:'digital_art'},
                    {text:'photography', value:'photography'},
                    {text:'street art', value:'street_art'},
                     {text:'illustration', value:'illustration'},
                     {text:'collage', value:'collage'},
                     {text:'drawing', value:'drawing'},
                     {text:'mixed media', value:'mixed_media'},
                     {text:'abstract art', value:'astract_art'},

                ],
                submitted:false,
                showing: false,
                checked: false,
                show_form: false,
            }
        },
        methods: {
            showSuccess(file) {
                console.log('File uploaded')
                bus.$emit('uploaded', file)
                this.showing = true
            },
            onChange () {
              console.log("Picture changed!")
            },
            upload_details(){
                let post = this.post;
                this.$http.post('/upload/details',post).then(function(response){
                    this.post = {
                        display_option_selected: '',
                    title:'untitled',
                    description:'',
                    watermark_check:false,
                    mature_picked:false,
                    selected_category: '',
                    tags:'',
                    };

                    this.submitted = true;
                })
            }
        },

        watch:{


        }
    }
</script>
