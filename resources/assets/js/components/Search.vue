<template>
    <div class="container">
        <div class="row">
            <div class="col-xsm-6 col-xsm-offset-3">
                <input type="text" class=" form-control" placeholder= "search" v-model="query" @keyup.enter="search()">
                <br>
                <div class="row" v-if="results.length">
                    <div class="text-center" v-for="user in results">

                        <div class="text-center" @click = "view_user(user.slug)">
                            <a :href="'/profile/' + user.slug">
                                <img :src="user.avatar" alt="" width="50px" height="50px" class="searched-user">
                                <h4 class="text-center">{{ user.name }}</h4>
                                <h5 class="text-center">{{ user.slug }}</h5>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    var algoliasearch = require('algoliasearch')

    var client = algoliasearch('PYUHJKGE8Q','bc34bc16b51b737e1cc400d3ca334a57')

    var index = client.initIndex('users')
    
    export default{
        mounted(){

        },

        props: ['slug','profile_user_id'],

        data(){
            return {
                query: '',
                results: [],

            }
        },

        methods: {
             search(){
                 index.search(this.query ,(err,content) => {
                this.results = content.hits
            })
             },

             view_user(slug)
             {
                 this.$http.get('/profile/' + slug)
                 .then((resp)=>
                 {
                     $router.go('/profile/' + slug)
                 })
             }
        }
    }
</script>

<style>
    .searched-user{
        border-radius:50%;
    }
</style>
