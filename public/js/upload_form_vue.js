new Vue({
    el: '#app',


    components: {

    },
    props: {
        csrf: {
            type: String
        },

    },


    data: {


        display_option_selected: '',
        title: 'untitled',
        description: '',
        watermark_check: false,
        mature_picked: false,
        selected_category: '',
        tags: '#',
        image: '',
        comment_options: true,
        critique_options: false,
        sharing_options: false,
        download_options: false,
        print_options: false,

        options: [
            { text: 'traditional', value: 'traditional' },
            { text: 'digital art', value: 'digital_art' },
            { text: 'photography', value: 'photography' },
            { text: 'street art', value: 'street_art' },
            { text: 'illustration', value: 'illustration' }
        ],
        submitted: false,
        showing: false,


    },
    methods: {

    },

    watch: {


    }

});