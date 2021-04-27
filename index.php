<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="logo">
            <img src="img/spotify_logo.png" alt="Spotify Logo">
        </div>
    </div>
    </div>
    

    <div class="main">
        <div class="container center">
            <?php 
                include __DIR__ .'/database.php'; 
                foreach($database as $songs){
            ?>
            <p>
            <?php echo '<img src="'.$songs['poster']. '">' . $songs['title'] . $songs['author'] . $songs['year'];  } ?>
            </p>  
        </div>
    </div>
    
</body>
</html>