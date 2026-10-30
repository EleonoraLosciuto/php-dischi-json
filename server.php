<?php



if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['poster']) && isset($_POST['year']) && isset($_POST['genre']))
{

$title = $_POST['title'];
$author = $_POST['author'];
$poster = $_POST['poster'];
$year = $_POST['year'];
$genre = $_POST['genre'];


// recupero dei dati giá presenti nel file json
 $dischi_string = file_get_contents('./dischi.json');

// uso json decode per leggere correttamente l'informazione
 $dischi = json_decode($dischi_string, true);

 // aggiungo il nuovo elemento all'array
$dischi[]= [
    'title' => $title,
    'author' => $author,
    'poster' => $poster,
    'year' => $year,
    'genre' => $genre,
];

// trasformo l'array con il nuovo elemento in stringa json
$dischi_json = json_encode($dischi);

// sovrascrivo il server con il nuovo array
file_put_contents('./dischi.json', $dischi_json);

// reindirizzo l'utente alla pagina index
header('Location: ./index.php');

};

?>