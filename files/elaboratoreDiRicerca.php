<?php
    function trovaTag($tag){
        for ($i=0; $i < count($tag); $i++) { 
            $pos = strpos($tag[$i], "="); //conta caratteri finché non trova '='
            $pos++; 
            $tag[$i] = substr($tag[$i], -(strlen($tag[$i])-$pos)); //elimina tutti i caratteri prima dell'uguale
        }
        return $tag;   
    }

    $var=$_SERVER['QUERY_STRING'];
    if(strlen($var)!=0) { //se ci sono parametri nell'url
        $tag = explode("&", $var);
        $tag = trovaTag($tag);
        
        //for($i=0; $i<count($tag); $i++) echo $tag[$i];

        //seleziona i file a cui sono assegnati TUTTI i tag ricercati

        //$query = 'SELECT nomefile, tag'.PHP_EOL.'FROM enzo'.PHP_EOL.'WHERE ';
        $query = 'SELECT f.nomefile, f.percorso FROM files as f, enzo as e WHERE e.nomefile=f.nomefile AND ';
        //In caso ci siano più tag aggiunge dopo il where le condizioni
        $query = $query.'e.tag = '.'"'.$tag[0].'"';
        for($i=1; $i<count($tag); $i++){
            $query = $query.' AND  e.tag = '.'"'.$tag[$i].'"';
        }

    } else { //se non ci sono parametri nell'url
        $query = 'SELECT nomefile, percorso FROM file';
        //slezione tutti file in caso non ci siano tag selezionati
    }

    //echo $query;
?>