<html>
	<head>
		<title>Ricerca tramite filtri</title>
	</head>
	<body>
		<p>Selezionare i tag desiderati (Per selezionare più tag premere il tasto SHIFT):</p>
		<form action="fornitoreZip.php" method="get">
			<select multiple size="4" name="listaTag">
				<?php include 'connessione.php' ?>
				<?php
					$sql="SELECT tag FROM TAGS";

					$res=$connessione->query($sql);

					while($r=$res->fetch_assoc()){
						echo "<option value=\"".$r["tag"]."\">".$r["tag"]."</option></br>";
					}
				?>
			</select>
			<input type="submit" value="Ricerca...">
		</form>
	</body>
</html>