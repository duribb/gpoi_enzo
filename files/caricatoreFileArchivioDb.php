<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_FILES['elencoFiles'])) {
    $file_array = $_FILES['elencoFiles'];
    $upload_dir = 'archivio/waiting'; // directory dove caricare i file
    $file_count = count($file_array['name']);
    


    $nomehost = 'localhost';
    $nomeuser = 'enzo';
    $password = 'enzo';
    $database = 'TAGDB';
    $connessione = new mysqli($nomehost, $nomeuser, $password, $database);

    if($connessione === false){
      die('Errore nella connessione al database: ' . $connessione);
    }

    for ($i = 0; $i < $file_count; $i++) {
      $file_name = $file_array['name'][$i];
      $file_tmp = $file_array['tmp_name'][$i];
      $file_type = $file_array['type'][$i];
      $file_size = $file_array['size'][$i];

      $upload_path = $upload_dir . basename($file_name);

      if (move_uploaded_file($file_tmp, $upload_path)) {
        echo 'Il file '.$file_name.' è stato caricato con successo.';
        $sql = 'INSERT INTO files (nomefile, percorso) VALUES ('.$file_name.', '.$upload_path.')';
        if($connessione->query($sql) === true){
          echo 'caricamento file su db avvenuto con successo';
        }else{
          echo 'errore nel caricamento del file sul db';
        }
      } else {
        echo 'Si è verificato un errore durante il caricamento del file.';
      }
    }
    $connessione->close();
  }
}
?>
