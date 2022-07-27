var app = new Vue (
    {
        el: '#root',
        data: {
            albums: []
        },
        methods: {
            getAlbumsFromApi() {
                axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then((response) => {
                    this.albums = response.data;
                });
            }
        },
        mounted() {
            this.getAlbumsFromApi();
        }
    }
);