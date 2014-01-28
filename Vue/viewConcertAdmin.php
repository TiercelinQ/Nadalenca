<h1>Gestion des concerts</h1>
<hr />

	<table border = "1">
		<tr>
			<th>Titre Concert</th>
			<th>Date</th>
			<th>Heure</th>
			<th>Lieu</th>
			<th>Adresse</th>
			<th>Ville</th>
			<th>Prix</th>						
			<th>Modifier</th>
			<th>Supprimer</th>		
<?php
include("../Modele/Concert.php");
	while ($tuple = mysql_fetch_array($restot))
	{ 	
		$i = $tuple['id'];
		$euDate = date("d-m-Y", strtotime($tuple['dateC']));
		echo "<tr>"
				."<td>".$tuple['titreC']."</td>"
				."<td>".$euDate."</td>"
				."<td>".$tuple['heureC'].'h'.$tuple['minuteC']."</td>"
				."<td>".$tuple['lieuC']."</td>"
				."<td>".$tuple['adresseC']."</td>"
				."<td>".$tuple['villeC']."</td>"
				."<td>".$tuple['prixC']."€</td>"
				."<td><a href=\"./controlConcertTitre.php?id=".$tuple['id']."\">Modifier</a></td>";
			echo "<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Concerts'/>
        </button></td></tr>";

		/* suppression sans javascript
		echo "<td>"."<button type= \"button\" " . "onclick=\"location.href='./controlSupConcerts.php?id=" 
		. $tuple['id']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Concert'/>
        </button>"."</td>"
			."</tr>";*/
	}
		echo "</table>";
	?>