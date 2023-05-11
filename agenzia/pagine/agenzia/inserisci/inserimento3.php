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
$sql=" SELECT id_loc,nome FROM localita ";
$risul=mysqli_query($conn,$sql);
if(mysqli_error($conn))
	die("errore nella query".$conn->error);
else
{
	$righe=mysqli_num_rows($risul);
	$col=mysqli_num_fields($risul);
	
}


?>
<form action="inserisci_agenzia.php" method="post">
			<table class="tabella-centr">
			</tr>
			<td><label for="ind">Inserisci indirizzo</label>
			<td><input type="text" name="ind" id="ind"></td></tr>
			</tr>
			
			<td><label for="loc">Inserisci localita</label>
			<td><select name="loc" id="loc">
			<?php
			
				while($riga=mysqli_fetch_array($risul))
				
					echo"
					<option value=' ".$riga[0] ." '>".$riga[1]."</option>";
				
			
			
			echo"</select>";
			?>
			
			</td></tr>
			
			
			
			<tr><td><input type="submit" value="inserisci"></td></tr>
			</table>
			
			</form>
			
			<button onclick="location.href='../../../index.html'">HOME</button>
			
</body>
</html>