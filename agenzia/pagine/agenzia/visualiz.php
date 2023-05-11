<html>
	<head>
	</head>
	<body>
		<?php
			$db="agenzia";
			$t="agenzia";

			//connessione al server MySql
			$con=mysqli_connect("localhost","root","",$db);
			if(!$con)
			{
				die("Errore nella connessione al server MySQL:  " . mysqli_connect_error());
			}

			//viene costruita la query
			$q="SELECT id_agenzia,ind FROM $t";

			$rs=mysqli_query($con,$q);


			if(!$rs)
			{
				die("Errore nella query $q: " . mysqli_error($con));
			}

			// numero di record del risultato
			$n=mysqli_num_rows($rs);//memorizza il numero delle righe

			if($n==0)//se le righe sono uguale a 0 non ci sono risultati
			{
				print("<p>nessun record presente</p>\n");
			}
			else
			{
				//viene calcolato il numero di campi della tabella
				$col=mysqli_num_fields($rs);//memorizza il numero delle colonne
				
				print("<table border=2>");
				
				print("<tr>");
				
				//ciclo per stampare i nomi dei campi
				for($j=0;$j<$col;$j++)
				{
					print("<th>" . mysqli_fetch_field($rs)->name . "</th>"); //ogni ciclo stampa l'intestazione della colonna
				}
				print("</tr>");
				
				//ciclo che stampa la tabella
				for($i=0;$i<$n;$i++)
				{
					//viene letto il prossimo record e memorizzato in un array associativo
					$a=mysqli_fetch_array($rs);//contiene i risultati della prima riga
					print("<tr>\n");
					
					//ciclo per stampare i valori nei campi
					for($j=0;$j<$col;$j++)
					{
						print("<td>" . $a[$j] . "</td>\n");//visualizza i risultati della prima riga
					}
					
					print("</tr>");
				}
				print("</table>");
			}	

			//viene chiusa la connessione
			mysqli_close($con);
				
		?>
	</body>
</html>