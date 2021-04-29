var root = new Vue({
    el: '#root',
    data: {
        userSearch: '',
        songs: '' 
    },
    mounted() { 
            axios
            .get('http://localhost:8888/php-ajax-dischi/server.php')
            .then(( response) => {
                const result = response.data;
                console.log(result);   
                this.songs = result;
                console.log(this.songs);
            })
    },
    /*methods: {
        searchSinger: function(userSearch){
            if (userSearch != '') {
                axios
                .get('http://localhost:8888/php-ajax-dischi/server.php?auth')
                .then(( response) => {
                    const result = response.data;
                    console.log(result);   
                    this.songs = result;
                    console.log(this.songs);
                    console.log(userSearch);
            })
            }
        }
    }*/
    });
