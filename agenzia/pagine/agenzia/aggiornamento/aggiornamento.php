<!DOCTYPE html>
<html lang="it">
		<head>
			<link href="../stili/stili.css" rel="stylesheet" type="text/css">
			<meta charset="UTF-8">
			<title>AGGIORNAMENTO</title>
		</head>
<body>
	<?php
		include "../../../conn.php";
		$query = "UPDATE agenzia SET Ind='".$_POST["ind"]."', localita='".$_POST["localita"]."' WHERE id_agenzia=".$_POST["id"];
		
		mysqli_query($conn, $query);

		echo "Fatto";
	?>	
</body>
</html>