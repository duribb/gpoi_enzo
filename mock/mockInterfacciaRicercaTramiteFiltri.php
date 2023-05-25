<html>
	<head>
		<title>Ricerca tramite filtri</title>
	</head>
	<body>
		<p>Selezionare i tag desiderati (Per selezionare più tag premere il tasto SHIFT):</p>
		<form action="elaboratoreDiRicerca.php" method="get">
			<select multiple size="4" name="listaTag">
				<?php
					$tags=array("-- seleziona --", "verifica", "circolare", "borgogno", "quadri", "TAA66");
					for($i=0; $i<count($tags); $i++){
						echo "<option value=\"".$tags[$i]."\">".$tags[$i]."</option></br>";
					}
				?>
			</select>
			<input type="submit" value="Ricerca...">
		</form>
	</body>
</html>