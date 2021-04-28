<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN libreria Axios e CDN VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!--Collegamenti foglio di stile e Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi Vue Version</title>
</head>
<body>
    <div>
        <div class="header">
            <div class="my_container">
                <div class="logo">
                    <img src="img/spotify_logo.png" alt="Spotify Logo">
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container center">
                <div class="row" id="root">
                    <div v-for="song in songs" class="poster col-sm-3"> 
                    <img :src="song.poster" alt="">    
                    <p>{{song.title}}</p>
                        <p>{{song.author}}</p>
                        <p>{{song.year}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/main.js"></script>
</body>
</html>