var app = new Vue({
    el: '#root',
    data: {
      albums: []
    },
    methods: {
        getAlbums() {
            axios.get("http://localhost:8888/php-ajax-dischi/api.php").then( (result) => {
                this.albums = result.data
            })
        }
    },
    mounted() {
        this.getAlbums();
    }
  })