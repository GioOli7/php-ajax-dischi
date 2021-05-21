const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        console.log(window.location.href);
        const dataURL = window.location.href + 'data/getAlbum.php';
        axios
            .get(dataURL)
            .then(result => {
                this.albums = result.data;
            })
            .catch(err => {
                console.log(err);
            });
    },
});
