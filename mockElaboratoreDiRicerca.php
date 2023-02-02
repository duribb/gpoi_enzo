<?php
    $tag = array("Informatica", "2022"); //tutti i tag derivanti da un eventuale form

    $nTag = 2;//conta numero di tag


    if($tag>0){
        $query = 'SELECT nomeFile, tag'.PHP_EOL.'FROM file'.PHP_EOL.'WHERE '; 
        //In caso ci siano più tag aggiunge dopo il where le condizioni
        $query = $query.'tag = '.'"'.$tag[0].'"';
        for($i=1; $i<$nTag; $i++){
            $query = $query.' AND  tag = '.'"'.$tag[$i].'"';
        }
    }else{
        $query = 'SELECT nomeFile, tag'.PHP_EOL.'FROM file';
        //slezione tutti file in caso non ci siano tag selezionati
    }
    
    echo $query;
?>