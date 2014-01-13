<?php
include("../menu.php"); 
include ("../Modele/Concert.php");

echo 'Concert de Nadalenca :
		<table border = "1">
			<tr>
				<td>id</td>
				<td>Titre_Concert</td>
				<td>Jour</td>
				<td>Numero Jour</td>
				<td>Mois</td>
				<td>Annee</td>
				<td>Heure</td>
				<td>Lieu</td>
				<td>Adresse</td>
				<td>Ville</td>';

	$req="SELECT * from concert"; // requete
	$res =mysql_query($req); // envoi de la requete

	while ($tuple = mysql_fetch_array($res))
	{ 
		echo "<tr>"
				."<td>".$tuple['id']."</td>"
				."<td>".$tuple['titreC']."</td>"
				."<td>".$tuple['jourC']."</td>"
				."<td>".$tuple['numJourC']."</td>"
				."<td>".$tuple['moisC']."</td>"
				."<td>".$tuple['anneeC']."</td>"
				."<td>".$tuple['heureC'].'h'.$tuple['minuteC']."</td>"
				."<td>".$tuple['lieuC']."</td>"
				."<td>".$tuple['adresseC']."</td>"
				."<td>".$tuple['ville']."</td>"	 
			."</tr>";
	}
		echo "</table><br/>";
		
		
		require("../footer.php");