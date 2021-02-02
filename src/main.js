let app = new Vue({
    el : '#root',
    data:{
        albums : [],
    },
    methods:{

    },
    mounted(){
        axios.get('./db.php')
        .then(response => {
            this.albums = response.data;
        })
    }
})