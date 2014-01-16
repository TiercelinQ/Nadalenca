<h1>Visualisation et suppression des concerts</h1>
<hr />
	<table border = "1">
		<tr>
			<td>Titre Concert</td>
			<td>Date</td>
			<td>Heure</td>
			<td>Lieu</td>
			<td>Adresse</td>
			<td>Ville</td>
			<td>Prix</td>						
			<td>Supprimer</td>		
<?php
include("../Modele/Concert.php");
	while ($tuple = mysql_fetch_array($restot))
	{ 	
		$euDate = date("d-m-Y", strtotime($tuple['dateC']));
		echo "<tr>"
				."<td>".$tuple['titreC']."</td>"
				."<td>".$euDate."</td>"
				."<td>".$tuple['heureC'].'h'.$tuple['minuteC']."</td>"
				."<td>".$tuple['lieuC']."</td>"
				."<td>".$tuple['adresseC']."</td>"
				."<td>".$tuple['villeC']."</td>"
				."<td>".$tuple['prixC']."</td>"
				."<td>"."<button type= \"button\" " . "onclick=\"location.href='./controlSupConcerts.php?id=" 
		. $tuple['id']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Concert'/>
        </button>"."</td>"
			."</tr>";
	}
		echo "</table><br/>";
	?>