<?php
    
    $json = file_get_contents('https://api.gbsistemas.net/pregame');
    file_put_contents("jogos.json", $json);


?>