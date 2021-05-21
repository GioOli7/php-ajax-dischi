const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        select: 'All',
        artists: [],
        dataURL: window.location.href + 'data/getAlbum.php',
    },
    created() {
        axios
            .get(this.dataURL)
            .then(result => {
                this.albums = result.data.database;
                this.artists = result.data.artists;
            })
            .catch(err => {
                console.log(err);
            });
    },
    methods: {
        selected(select) {
            //
            axios.get(this.dataURL + `?author=${select}`)
            .then(result => {
                this.albums = result.data.database;
            });
        },
    },
});
