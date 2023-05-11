<!DOCTYPE html>
<html lang="it">
		<head>
			<link href="../../../stili/stili.css" rel="stylesheet" type="text/css">
			<link href="../../../stili/stili2_index.css" rel="stylesheet" type="text/css">
			<meta charset="UTF-8">
			<title>INSERIMENTO</title>
		</head>
<body>
<?php
include"../../../conn.php";
$sql="SELECT localita.nome FROM localita";
$risul=mysqli_query($conn,$sql);
$righe=mysqli_num_rows($risul);
if($righe==0)
	die("Non ci sono record");
?>
			<form action="vis_ag_citta.php" method="post">
			<table class="tabella-centr">
			<tr>
			<th colspan="3"> Agenzie</th>
			</tr>
			<tr>
			<td>
			<label for="citta">Seleziona Città</label>
			<select name="citta">
			<option value=""></option>
			<?php
				while($citta=mysqli_fetch_array($risul))
					echo"<option value=".$citta["nome"].">".$citta["nome"]."</option>";
				?>
			</select>
			</td>
			
			</tr>
			<td><input type="submit" value="cerca"></td>
			</tr>
			
			
			
			
			</form>
			</table>
			<button onclick="location.href='../index.html'">HOME</button>
			
			
</body>
</html>