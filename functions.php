<?php
    function getAlbums () {
    // step 1 - ricevo informazione sui dischi dal mio server JSON
    $dischi_string = file_get_contents('./dischi.json');

    // step 2 - uso json decode per leggere correttamente l'informazione
    return json_decode($dischi_string, true);
    }
?>
