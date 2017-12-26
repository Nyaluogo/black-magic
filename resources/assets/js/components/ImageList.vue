<template>
    <div class="container">
        <div class="row">
            <div class="title m-b-md">
                Images
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" v-if="loading">
                Loading...
            </div>

            <div class="col-md-12" v-if="files.length > 0">
                <a v-for="file in files" :href="file.path" class="vue-image">
                    <img :src="file.thumb" class="img-rounded" width="200">
                </a>
            </div>
            
            <div class="col-md-12" v-if="files.length == 0 && !loading">
                <p>
                    Oh Noes! There was no images available!
                </p>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios'
    import bus from '../bus'

    export default {
        created() {
            this.refresh();
            bus.$on('uploaded', (file) => {
                if(file.status == "success")
                    this.refresh()
            });
        },
        watch: {
            '$route': 'refresh'
        },
        props: {
            url: {
                type: String
            }
        },
        data() {
            return {
                files: [],
                loading: false
            }
        },
        methods: {
            refresh() {
                this.loading = true;
                axios.get(this.url).then(
                    response => {
                        this.loading = false;
                        if(response.data) {
                            this.files = response.data
                        }
                    }
                )
            }
        }
    }
</script>