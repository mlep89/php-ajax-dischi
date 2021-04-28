<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <div class="header">
        <div class="my_container">
            <div class="logo">
                <img src="img/spotify_logo.png" alt="Spotify Logo">
            </div>
        </div>
    </div>
    

    <div class="main">
        <div class="container center">
            <div class="row">
            <?php 
            include __DIR__ .'/database.php'; 
            foreach($database as $songs){
            ?>
                <div class="poster col-sm-3">
                    <?php echo '<img src="'.$songs['poster']. '">' ?> <br> <?php echo $songs['title'] ?> <br> <?php echo $songs['author'] ?> <br> <?php echo $songs['year'];?>
                </div>  
            <?php } ?>
            </div>
        </div>
    </div>
    
</body>
</html>