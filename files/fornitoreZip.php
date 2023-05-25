<?php
    include("elaboratoreDiRicerca.php");
    include("connessione.php");

    echo $query."<br>";

    $res = $connessione->query($query);

    /*while($r=$res->fetch_assoc()){
        echo $r["percorso"].$r["nomefile"]."<br>";
    }*/

    $zip = new ZipArchive;
    $zip->open("archivio/zipRisultati.zip", ZipArchive::CREATE);

    while($r=$res->fetch_assoc()){
        if($zip->addFile($r["percorso"].$r["nomefile"], $r["nomefile"])) echo "200 -- ";
        else "104 -- ";

        echo $r["percorso"].$r["nomefile"]."<br>";
    }

    //echo $zip->count();

    //header('Content-disposition: attachment; filename=zipRisultati.zip');
    //header('Content-type: application/zip');

    echo '<a href="archivio/zipRisultati.zip" download="zipRisultati.zip">Download</a>';

    //$zip->close();
?>