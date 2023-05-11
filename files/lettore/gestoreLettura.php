<?php
    define('POSIZIONE_FILE', 'fileAnalizzati');

    require __DIR__ . '/vendor/autoload.php'; //Inclusione librerie esterne

    $path = "prova.pdf";

    $estensione = trovaEstenzione($path);

    switch($estensione){
        case "txt":
            txt($path);
            break;
        case "pdf":
            pdf($path);
            break;
        default:
            base($path);
    }

    echo "Conversione effettuata con successo, troverai il file convertito dentro la cartella 'fileAnalizzati'";
    










    function trovaEstenzione($path)
    {
        $est = pathinfo($path, PATHINFO_EXTENSION);
        return $est;
    }

    function trovaNomeNoEstensione($path){
        $name = pathinfo($path, PATHINFO_FILENAME);
        return $name;
    }

    function scrittura($path, $contenuto)
    {
        $nomeNFile = POSIZIONE_FILE."/".trovaNomeNoEstensione($path).".txt";

        $file = fopen($nomeNFile, "w+");
        if($file === false){
            die("Errore apertura file");
        }

        $by = file_put_contents($nomeNFile, $contenuto);
        if($by == false){
            die("Errore nella scrittura");
        }
    }

    function txt($path)
    {
        if (rename($path, POSIZIONE_FILE."/".trovaNomeNoEstensione($path).".txt")) {
            echo "Il file è stato spostato correttamente!";
        } else {
            echo "Si è verificato un errore durante lo spostamento del file.";
        }
    }

    function pdf($path)
    {
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($path);

        $text = $pdf->getText();
        //echo $text;

        scrittura($path, $text);
    }

    function base($path){
        $file = fopen($path, "r");
        if(!$file){
            die("Errore apertura file: "+trovaNomeNoEstensione($path));
        }

        $contenuto = stream_get_contents($file);
        scrittura($path, $contenuto);
    }    
?>