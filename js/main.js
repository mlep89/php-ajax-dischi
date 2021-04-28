var root = new Vue({
    el: '#root',
    data: {
        songs: '' 
    },
    mounted() { 
            axios
            .get('http://localhost:8888/php-ajax-dischi/server.php')
            .then(( response) => {
                const result = response.data;
                console.log(result);   
            })
    }
    /*methods: {
        searchFilm: function(userSearch){
            if (userSearch != '') {
                axios
                .get('https://api.themoviedb.org/3/search/movie?api_key=e1e83484b58b02a9d475b9cb41829bfe&language=it-IT&page=1&include_adult=false&query='+ this.userSearch)
                .then( (response) => {
                    this.films = response.data.results;
                })
            }
            else {
                this.films = [];
            }
        },
        searchSerie: function(userSearch){
            if (userSearch != '') {
                axios
                .get('https://api.themoviedb.org/3/search/tv?api_key=e1e83484b58b02a9d475b9cb41829bfe&language=it-IT&page=1&include_adult=false&query='+ this.userSearch)
                .then( (response) => {
                    response.data.results.forEach(serie => {
                        serie.vote_average = Math.ceil(serie.vote_average)/2;
                    })
                    this.series = response.data.results;
                })
            }
            else {
                this.series = [];
            }
        },
    }*/
    });
