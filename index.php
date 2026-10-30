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
                <hr>
                <div class="form-section">
                    <h3>Aggiungi un nuovo disco</h3>
                    <form action="./server.php" method="POST">
                        <div class="album-title">
                            <label for="title">Inserisci il nome dell'album</label>
                            <input type="text" name="title" id="title" placeholder="Nome album" required>
                        </div>
                        <div class="album-author">
                            <label for="author">Inserisci il nome dell'autore</label>
                            <input type="text" name="author" id="author" placeholder="Nome autore" required>
                        </div>
                        <div class="album-image">
                            <label for="poster">Inserisci il link all'immagine</label>
                            <input type="text" name="poster" id="poster" placeholder="Link alla copertina" required>
                        </div>
                        <div class="album-year">
                            <label for="year">Inserisci l'anno</label>
                            <input type="number" name="year" id="year" required>
                        </div>
                        <div class="album-genre">
                            <label for="genre">Seleziona il genere:</label>
                            <select name="genre" id="genre">
                                <option value=""></option>
                                <option value="Rock">Rock</option>
                                <option value="Pop">Pop</option>
                                <option value="Progressive Rock">Progressive Rock</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Metal">Metal</option>
                                <option value="Alternative Rock">Alternative Rock</option>
                                <option value="Indie">Indie</option>
                                <option value="Soul">Soul</option>
                                <option value="Classical">Classical</option>
                            </select>
                        </div>
                        <button type="submit">Invia</button>
                    </form>
                </div>

            </main>
        </div>
    </body> 
</html>