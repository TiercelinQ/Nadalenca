<h1>Recrutements reçus</h1>
<hr />

	<table border = "1">
		<tr>

			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
			<th>Téléphone</th>
			<th>Portable</th>
			<th>Expérience</th>
			<th>Maîtrise de l'occitan</th>
			<th>Observation</th>
			<th>Supprimer</th>
			


<?php
include("../Modele/Recrutement.php");
	while ($tuple = mysql_fetch_array($res))
	{ 
		$i = $tuple['idR'];
		echo"<tr>"
			."<td>".$tuple['nomR']."</td>"
			."<td>".$tuple['prenomR']."</td>"
			."<td>".$tuple['emailR']."</td>"
			."<td>".$tuple['telR']."</td>"
			."<td>".$tuple['portableR']."</td>"
			."<td>".$tuple['expeR']."</td>" 
			."<td>".$tuple['occR']."</td>" 
			."<td>".$tuple['obsR']."</td>" 
			."<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Recrutement'/>
        </button></td></tr>";
			
	}
		echo "</table><br/>";
	?>


	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>
