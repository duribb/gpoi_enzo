<!DOCTYPE html>
<html lang="it">

<head>

<meta charset="utf-8">

<title>AGENZIA IMMOBILIARE</title>

<link href="../../../stili/stili2_index.css" rel="stylesheet" type="text/css">
<link href="../../../stili/stili.css" rel="stylesheet" type="text/css">

</head>




<body bgcolor="#EoFFFF" align="center">




<?php
/*SELECT DISTINCT immobile.* ,agenzia.Indirizzo ,localita.nome FROM immobile JOIN localita ON immobile.localita=localita.id_loc 
JOIN agenzia ON immobile.agenzia=agenzia.id_agenzia
ORDER BY localita.nome;*/

include"../../../conn.php";
$localita=$_POST["citta"];
$sql="SELECT immobile.* ,localita.nome 
		FROM immobile JOIN localita 
		ON immobile.localita=localita.id_loc
		WHERE localita.nome='$localita' ;";
		$risul=mysqli_query($conn,$sql);
if(mysqli_error($conn))
	die("errore nella query".$conn->error);
else
{
	$righe=mysqli_num_rows($risul);
	$col=mysqli_num_fields($risul);
	
}
		echo"<table class='tabella-centr' border=1>";
		echo"<tr>";
		for($i=0;$i<$col;$i++)
		{
			$stampa=mysqli_fetch_field($risul)->name;
	
				echo"<th>".$stampa."</th>";
		}
		echo"</tr>";
		for($i=0;$i<$righe;$i++)
		{
			echo"<tr>";
			$visual=mysqli_fetch_array($risul);
			for($j=0;$j<$col;$j++)	
				{
					
						echo"<td>".$visual[$j]."</td>";
				}
			echo"</tr>";
		}

echo"</table>";

?>


</body>
</html>