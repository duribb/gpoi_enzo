<?php
    function inserisciAssociazione($tags, $conn) {
        //print_r($tags);
        
        for ($i=1;$i<count($tags);$i++) {

            inserisciTag($tags[$i], $conn);

            $query = "INSERT INTO enzo(nomefile, tag) VALUES (\"". $tags[0] ."\",\"". $tags[$i]."\")";
            //echo $query."<br>";
            
            
            if ($conn->query($query)) 
                echo "inserimento avvenuto con successo<br>";
            else
                echo "inserimento fallito<br>";   
        }
        
    }

    function inserisciTag($tag, $conn) {
        $query = "INSERT IGNORE INTO tags(tag) VALUES (\"".$tag."\")";
        //echo $query."<br>";
        $conn->query($query);
    }

    function aggiornaPercorso($nomefile, $conn) {
        $query = "UPDATE files SET percorso=\"working/processed\" WHERE nomefile=\"".$nomefile."\"";
        //echo $query."<br>";
        $conn->query($query);
    }
    

    $nomehost = 'localhost';
    $nomeuser = 'root';
    $password = '';
    $database = 'TAGDB';
    $connessione = new mysqli($nomehost, $nomeuser, $password, $database);
    if ($connessione->connect_error) 
        die ("connessione fallita");
    

    //legge il file

    $filename = 'tag.csv';
    $fp = fopen($filename, 'r');
    if (false === $fp) {
        printf('Impossibile aprire il file %s', $filename);
        exit;
    }

    //stream_get_line($handle, $length, $ending) - $line = stream_get_line($fp, 1024*1024, PHP_EOL)
    while ($line = fgets($fp, 1024)) {
        //echo $line;
        $tags = explode(";", $line);  
        inserisciAssociazione($tags, $connessione);
        aggiornaPercorso($tags[0], $connessione);
    }
    $query = "INSERT INTO enzo(nomefile, tag) VALUES (". $tags[0] .")";


    

    fclose($fp);




?>