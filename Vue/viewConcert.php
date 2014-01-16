<h1>Concerts</h1>
<hr />

<h3>Concerts futurs :</h3>
	<table border = "1">
		<tr>
			<td>Titre Concert</td>
			<td>Date</td>
			<td>Heure</td>
			<td>Lieu</td>
			<td>Adresse</td>
			<td>Ville</td>				
<?php
	while ($tuple1 = mysql_fetch_array($res1))
	{ 	
		$euDate = date("d-m-Y", strtotime($tuple1['dateC']));
		echo "<tr>"
				."<td>".$tuple1['titreC']."</td>"
				."<td>".$euDate."</td>"
				."<td>".$tuple1['heureC'].'h'.$tuple1['minuteC']."</td>"
				."<td>".$tuple1['lieuC']."</td>"
				."<td>".$tuple1['adresseC']."</td>"
				."<td>".$tuple1['villeC']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
	?>
<h3>Concerts passés de Nadalenca :</h3>
		<table border = "1">
			<tr>
				<td>Titre Concert</td>
				<td>Date</td>
				<td>Heure</td>
				<td>Lieu</td>
				<td>Adresse</td>
				<td>Ville</td>
					
	<?php 
	while ($tuple2 = mysql_fetch_array($res2))
	{ 	
		$euDate = date("d-m-Y", strtotime($tuple2['dateC']));
		echo "<tr>"
				."<td>".$tuple2['titreC']."</td>"
				."<td>".$euDate."</td>"
				."<td>".$tuple2['heureC'].'h'.$tuple2['minuteC']."</td>"
				."<td>".$tuple2['lieuC']."</td>"
				."<td>".$tuple2['adresseC']."</td>"
				."<td>".$tuple2['villeC']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
	?>
	
	