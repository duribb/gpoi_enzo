<?php

$conn=new mysqli("localhost","root","","agenzia");
if($conn->connect_error)
	die("Errore nella connessione".$conn->connect_error);
/*else
	echo "Connessione avvenuta correttamente";*/

?>