<?php

    include_once 'class.php';



    // $dadosJson = file_get_contents('pregame.json');
    $dadosJson = file_get_contents('jogos.json');

    $decode = json_decode($dadosJson, true);
    
    // print_r($decode);

    foreach ($decode as $scores) {
        foreach ($scores['categories'] as $cat) {
            echo $cat['name'] . "<br>";
        }
    }
    echo "<br><br><br>";
    // print_r($cat);
    
    foreach ($decode['categories'] as $cat) {
        echo "\nCampeonato: " . $cat['name'] . "<br> \n";
        foreach ($cat['matches'] as $jogos) {
            echo "ID da partida: " . $jogos['id'] . "<br>";
            $casa = $jogos['localteam'];
            echo " Casa: " . $casa['name'] . "<br>";
            $fora = $jogos['visitorteam'];
            echo " Fora: " . $fora['name'] . "<br>";
        }
    }


?>