<?php
    $nomehost = 'localhost';
    $nomeuser = 'enzo';
    $password = 'enzo';
    $database = 'TAGDB';
    $connessione = new mysqli($nomehost, $nomeuser, $password, $database);

    if($connessione === false){
      die('Errore nella connessione al database: ' . $connessione);
    }
?>