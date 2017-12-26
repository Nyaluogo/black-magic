import Vuex from 'vuex'
import Vue from 'vue'

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
        nots: [],
        posts: [],
        comments: [],
        myImages: [],
        auth_user: {}
    },

    getters: {
        all_nots(state) {
            return state.nots
        },
        all_nots_count(state) {
            return state.nots.length
        },
        all_posts(state) {
            return state.posts
        },
        all_images(state) {
            return state.myImages
        },
        all_comments(state) {
            return state.comments
        }
    },

    mutations: {
        add_not(state, not) {
            state.nots.push(not)
        },
        add_post(state, post) {
            state.posts.push(post)
        },

        add_image(state, image) {
            state.myImages.push(image)
        },

        auth_user_data(state, user) {
            state.auth_user = user
        },

        update_post_likes(state, payload) {
            var post = state.posts.find((p) => {
                return p.id === payload.id
            })

            post.likes.push(payload.like)
        },

        unlike_post(state, payload) {
            var post = state.posts.find((p) => {
                return p.id === payload.post_id
            })

            var like = post.likes.find((l) => {
                return l.id === payload.like_id
            })

            var index = post.likes.indexOf(like)

            post.likes.splice(index, 1) //deletes the like
        },

        update_post_comments(state, payload) {
            var post = state.posts.find((p) => {
                return p.id === payload.id
            })

            post.comment.push(payload.comment)
        },

        add_comment(state, comment) {
            state.comments.push(comment)
        }
    },

    actions: {

    }
})