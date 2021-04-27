<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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