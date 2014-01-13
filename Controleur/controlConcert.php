<?php
include ("./config.php");
include("./menu.php"); 

echo 'Concerts de Nadalenca :
		<table border = "1">
			<tr>
				<td>Titre_Concert</td>
				<td>Date</td>
				<td>Heure</td>
				<td>Lieu</td>
				<td>Adresse</td>
				<td>Ville</td>';

	$req="SELECT * from concert where dateC>now() order by dateC ASC "; // requete
	$res =mysql_query($req); // envoi de la requete

	while ($tuple = mysql_fetch_array($res))
	{ 
		echo "<tr>"
				."<td>".$tuple['titreC']."</td>"
				."<td>".$tuple['dateC']."</td>"
				."<td>".$tuple['heureC'].'h'.$tuple['minuteC']."</td>"
				."<td>".$tuple['lieuC']."</td>"
				."<td>".$tuple['adresseC']."</td>"
				."<td>".$tuple['ville']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
		
		
		require("./footer.php");
?>

