/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
// import InputTag from 'vue-input-tag'
import VTagInput from 'v-tag-input'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */




Vue.component('friend', require('./components/Friend.vue'));
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('unread', require('./components/UnreadNots.vue'));
Vue.component('post', require('./components/Post.vue'));
Vue.component('explore', require('./components/Explore.vue'));
Vue.component('like', require('./components/Like.vue'));

Vue.component('feed', require('./components/Feed.vue'));
Vue.component('init', require('./components/Init.vue'));
Vue.component('search', require('./components/Search.vue'));
// Vue.component('image-list', require('./components/ImageList.vue'));
Vue.component('upload', require('./components/Upload.vue'));
Vue.component('personal_gallery', require('./components/PersonalGallery.vue'));
Vue.component('auth_gallery', require('./components/AuthGallery.vue'));

const list = { template: '<image-list url="/list"></image-list>' }
const up = { template: `<upload csrf="${window.Laravel.csrfToken}" action="/upload"></upload>` }

const routes = [
    { path: '/', component: up },
    { path: '/list', component: list }
]

const router = new VueRouter({
    routes
})

import { store } from './store'

const app = new Vue({
    el: '#app',
    store,
    router
}).$mount('#app')
