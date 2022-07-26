var app = new Vue({
    el: '#root',
    data: {
      albums: [],
      genres: [],
      filter: "all"
    },
    methods: {
        getAlbums() {
            axios.get(`http://localhost:8888/php-ajax-dischi/api.php`).then( (result) => {
                this.albums = result.data
                this.genres = this.getGenres(result.data)
            })
        },
        getGenres(albums) {
            let allGenres = [];

            albums.forEach((album) => {
                if(!allGenres.includes(album.genre)) {
                    allGenres.push(album.genre);
                }
            });

            return allGenres;
        },
        getFilteredAlbums() {
            axios.get(`http://localhost:8888/php-ajax-dischi/api.php?genre=${this.filter.toLowerCase()}`).then( (result) => {
                this.albums = result.data
            })
        }
    },
    created() {
        this.getAlbums();
    }
  })