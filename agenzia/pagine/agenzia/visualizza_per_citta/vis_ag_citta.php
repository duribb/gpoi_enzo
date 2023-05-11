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
$citta=$_POST['citta'];
include"../../../conn.php";
$q="SELECT agenzia.id_agenzia,agenzia.ind,localita.nome AS Citta FROM agenzia
inner join localita on agenzia.localita=localita.id_loc
 WHERE localita.nome='$citta'";
$risul=mysqli_query($conn,$q); //oppure 
if(mysqli_error($conn))
	die(" errore nella query".mysqli_error($conn));
$record=mysqli_num_rows($risul);
	
if($record<0)
	die("Non ci sono agenzie in questa città");
else
{
	$col=mysqli_num_fields($risul);
	
}
?>
			<form action="vis_citta.php" method="post">
			<table class="tabella-centr">
			<tr>
			<th colspan="3"> Agenzie</th>
			</tr>
			<tr>
			<?php
			for($i=0;$i<$col;$i++)
				echo"<th>".mysqli_fetch_field($risul)->name."</th>";
			echo"</tr>";
			
			for($i=0;$i<$record;$i++)
			{
				$rec=mysqli_fetch_array($risul);
				echo"<tr>";
				for($j=0;$j<$col;$j++)
				{
					
					echo"<td>$rec[$j]</td>";
					
				}
				echo"</tr>";
			}
			
			?>
			
			</table>
			
			
			
			</form>
			
			<button onclick="location.href='../../../index.html'">HOME</button>
			
</body>
</html>