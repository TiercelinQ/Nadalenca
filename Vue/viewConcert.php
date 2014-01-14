Concerts futurs :
		<table border = "1">
			<tr>
				<td>Titre_Concert</td>
				<td>Date</td>
				<td>Heure</td>
				<td>Lieu</td>
				<td>Adresse</td>
				<td>Ville</td>
				
	<?php
	while ($tuple1 = mysql_fetch_array($res1))
	{ 
		echo "<tr>"
				."<td>".$tuple1['titreC']."</td>"
				."<td>".$tuple1['dateC']."</td>"
				."<td>".$tuple1['heureC'].'h'.$tuple1['minuteC']."</td>"
				."<td>".$tuple1['lieuC']."</td>"
				."<td>".$tuple1['adresseC']."</td>"
				."<td>".$tuple1['ville']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
	?>
		
		Concerts passés de Nadalenca :
		<table border = "1">
			<tr>
				<td>Titre_Concert</td>
				<td>Date</td>
				<td>Heure</td>
				<td>Lieu</td>
				<td>Adresse</td>
				<td>Ville</td>
					
	<?php 
	while ($tuple2 = mysql_fetch_array($res2))
	{ 
		echo "<tr>"
				."<td>".$tuple2['titreC']."</td>"
				."<td>".$tuple2['dateC']."</td>"
				."<td>".$tuple2['heureC'].'h'.$tuple2['minuteC']."</td>"
				."<td>".$tuple2['lieuC']."</td>"
				."<td>".$tuple2['adresseC']."</td>"
				."<td>".$tuple2['ville']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
	?>
	
	