<?php

    // step 1 - ricevo informazione sui dischi dal mio server JSON
    $dischi_string = file_get_contents('./dischi.json');

    // step 2 - uso json decode per leggere correttamente l'informazione
    $dischi = json_decode($dischi_string);
    var_dump($dischi);

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
                    <div class="music-album-card">
                        <img class="music-poster" src="./assets/After-Hours.jpg" alt="After Hours">
                        <h3>Titolo</h3>
                        <p>Autore</p>
                        <h4>Anno</h4>
                    </div>
                    <div>album</div>
                    <div>album</div>
                    <div>album</div>
                    <div>album</div>
                    <div>album</div>
                </div>
            </main>
        </div>
    </body> 
</html>