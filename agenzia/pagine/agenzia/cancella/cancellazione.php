<!DOCTYPE html>
<head>
	<title>Cancellazione</title>
</head>
<body>
	<?php
		include "../../../conn.php";

		$query1 = "UPDATE immobile SET agenzia=".$_POST["newAg"]." WHERE agenzia=".$_POST["nomeA"];

		$sql="DELETE FROM agenzia WHERE id_agenzia=".$_POST["nomeA"];

		mysqli_query($conn, $query1);
		mysqli_query($conn, $sql);
		
		echo "FATTO";
	?>
</body>
</html>