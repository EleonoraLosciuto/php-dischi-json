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
                        $img_disco = "<img class='music-poster' src=" . $disco['poster'] . " alt=" . $disco['title'] . "/>";
                        $titolo = "<h3>" . $disco['title'] . "</h3>";
                        $autore = "<p>" . $disco['author'] . "</p>";
                        $anno = "<h4>" . $disco['year'] . "</h4>";

                        echo "<div class='music-album-card'>" . $img_disco . $titolo . $autore . $anno . "</div>";
                    };

                ?>
                </div>
            </main>
        </div>
    </body> 
</html>