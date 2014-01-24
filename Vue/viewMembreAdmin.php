<h1>Gestion des membres</h1>
<hr />

	<table border = "1">
		<tr>

			<th>Nom</th>
			<th>Prénom</th>
			<th>Adresse Email</th>
			<th>Mot de Passe</th>
			<th>Admin</th>
			<th>Changer Statut Admin</th>
			<th>Supprimer membre</th>
			<th>Statut</th>
			


	<form action='../Controleur/controlMembresAdmin.php' method='post'>	
<?php
	while ($tuple = mysql_fetch_array($res))
	{ 
		echo"<tr>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['email']."</td>"
				."<td>".$tuple['mdp']."</td>"
				."<td>".$tuple['admin']."</td>"
				."<td>"."<input type='checkbox' name='email[]' value='$tuple[email]'/>"."<br /></td>" 
				."<td>"."<input type='checkbox' name='idDelete[]' value='$tuple[id]'/>"."<br /></td>"
				."<td>".$tuple['statut']."</td>" 
			."</tr>";
			
	}
		echo "</table><br/>";
	?>
	<input type ='submit'  value ='Modification' > <br /></form>
	
	<?php include("../Controleur/controlAddMembres.php");?>

	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>
