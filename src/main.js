let app = new Vue({
    el : '#root',
    data:{
        albums : [],
        author : 'All',
        newAlbums : [],
    },
    methods:{

    },
    mounted(){
        axios.get('./db.php')
        .then(response => {
            this.albums = response.data;
        })
    },
    beforeUpdate(){
        axios.get('./db.php')
        .then(response => {
            this.newAlbums.splice(0);
            response.data.forEach(album => {
                if(album.author === this.author){
                    this.newAlbums.push(album);
                }else if(this.author === 'All'){
                    this.newAlbums.push(album);
                }
            })
        });
    }
})