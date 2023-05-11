<!DOCTYPE html>
<html lang="it">
		<head>
			<link href="../../../stili/stili.css" rel="stylesheet" type="text/css">
			<meta charset="UTF-8">
			<title>INSERIMENTO</title>
		</head>
<body>
			
			
			
			


<?php
include"../../../conn.php";
$ind=$_POST["ind"];
$citt=$_POST["loc"];
$sql="INSERT INTO agenzia(ind,localita)
		VALUE
		('$ind','$citt');";
		
		if($conn->query($sql))
			echo"Inserimento avvenuto";
		else
			echo" Errore nella query".$conn->error;


?>

<button onclick="location.href='../../../index.html'">HOME</button>
</body>
</html>