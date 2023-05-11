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
$query="SELECT immobile.* ,localita.nome 
		FROM immobile JOIN localita 
		ON immobile.localita=localita.id_loc;";
		$risul=$conn->query($query);
		echo"<table class='tabella-centr' border=1>
		<tr>
			<th>ID</th><th>INDIRIZZO</th><th>N.VANI</th><th>METRATURA</th><th>PIANO</th>
			<th>ASCENSORE</th><th>PREZZO</th><th>VENDUTO</th><th>N.AGENZIA</th>
			<th>CITTA</th></tr>";
		
		while($visual=$risul->fetch_assoc())
		{
			
			
			echo"<td>".$visual['id_imm']."</td><td>".$visual['indirizzo']."</td>
			<td>".$visual['nvani']."</td><td>".$visual['metratura']."</td>
			<td>".$visual['piano']."</td><td>".$visual['ascensore']."</td>
			<td>".number_format($visual['prezzo'],2)."</td><td>".$visual['Venduto']."</td>
			<td>".$visual['agenzia']."</td><td>".$visual['nome']."</td>";
			
			
			echo"</tr>";
		}

echo"</table>";

?>


</body>
</html>