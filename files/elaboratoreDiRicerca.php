<?php
    function trovaTag($tag){
        for ($i=0; $i < count($tag); $i++) { 
            $pos = strpos($tag[$i], "=");
            $pos++; 
            $tag[$i] = substr($tag[$i], -(strlen($tag[$i])-$pos));     
        }
        return $tag;   
    }

    $var=$_SERVER['QUERY_STRING'];

    $tag = explode("&", $var);

    $tag = trovaTag($tag);
?>