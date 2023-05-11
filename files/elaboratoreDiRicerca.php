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
        
        //$query = 'SELECT nomefile, tag'.PHP_EOL.'FROM enzo'.PHP_EOL.'WHERE ';
        $query = 'SELECT percorso FROM files, enzo WHERE enzo.nomefile=files.nomefile AND ';
        //In caso ci siano più tag aggiunge dopo il where le condizioni
        $query = $query.'tag = '.'"'.$tag[0].'"';
        for($i=1; $i<count($tag); $i++){
            $query = $query.' AND  tag = '.'"'.$tag[$i].'"';
        }

    } else { //se non ci sono parametri nell'url
        $query = 'SELECT nomeFile, tag FROM file';
        //slezione tutti file in caso non ci siano tag selezionati
    }

    //echo $query;
?>