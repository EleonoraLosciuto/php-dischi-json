<?php

    require_once('functions.php');
    
    $dischi = getAlbums();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>I Tuoi Dischi</title>
</head>

    <body>
        <div class="container-app">
            <header class="header nav-bar">
                <div class="container-navbar">
                    <img id="logoSpotify" src="./assets/logo.png" alt="logo">
                </div>    
            </header>
            <main>
                <div class="music">
                <?php
                    foreach($dischi as $disco) { 
                    ?>
                    <div class="music-album-card">
                        <img class='music-poster' src=<?php echo $disco['poster']?> alt=<?php echo $disco['title']?>/>
                        <h3><?php echo $disco['title']?></h3>
                        <p><?php echo $disco['author']?></p>
                        <h4><?php echo $disco['year']?></h4>
                    </div>
                    <?php 
                    };
                    ?>
                </div>
            </main>
        </div>
    </body> 
</html>