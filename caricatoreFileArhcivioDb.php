<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_FILES['elencoFiles'])) {
    $file_array = $_FILES['elencoFiles'];
    $upload_dir = 'files_dir/'; // directory dove caricare i file
    $file_count = count($file_array['name']);

    for ($i = 0; $i < $file_count; $i++) {
      $file_name = $file_array['name'][$i];
      $file_tmp = $file_array['tmp_name'][$i];
      $file_type = $file_array['type'][$i];
      $file_size = $file_array['size'][$i];

      $upload_path = $upload_dir . basename($file_name);

      if (move_uploaded_file($file_tmp, $upload_path)) {
        echo "Il file $file_name è stato caricato con successo.";
      } else {
        echo "Si è verificato un errore durante il caricamento del file.";
      }
    }
  }
}
?>
