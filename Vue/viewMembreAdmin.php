<h1>Gestion des membres</h1>
<hr />

	<table border = "1">
		<tr>

			<td>Nom</td>
			<td>Prénom</td>
			<td>Adresse Email</td>
			<td>Mot de Passe</td>
			<td>Admin</td>
			<td>Changer Statut Admin</td>
			<td>Supprimer membre</td>
			<td>Statut</td>
			<td>Changer Statut</td>
			


	<form action='controlMembresAdmin.php' method='post'>	
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
			."<td>"."<select name='statut' type ='hidden'>
			 <option value=\"President\" if(".$profil->getStatut() ."'==President') {";echo 'selected'."}  > Président
              <option value=\"Vice-President\" if (".$profil->getStatut() ."'==Vice-President') {";echo 'selected'."}  > Vice-Président  
              <option value=\"Tresorier\" if (".$profil->getStatut() ."'==Tresorier') {";echo 'selected'."} > Trésorier
              <option value=\"Tresorier adjoint\"  if (".$profil->getStatut() ."'==Tresorier adjoint') {";echo 'selected'."} > Trésorier adjoint
              <option value=\"Secretaire\"  if (".$profil->getStatut() ."'==Secretaire') {";echo 'selected'."} > Secrétaire
              <option value=\"Secretaire adjoint\"  if (".$profil->getStatut() ."'==Secretaire adjoint') {";echo 'selected'."} > Secrétaire adjoint
              <option value=\"Membre du conseil d'administration\" if (".$profil->getStatut() ."'==Membre du conseil d'administration') {";echo 'selected'."} > Membre du conseil d'administration
              <option value=\"Adherent\"  if (".$profil->getStatut() ."'==Adherent') {";echo 'selected'."} > Adhérent
				      </select>"."</td>"
			."</tr>";
			
	}
		echo "</table><br/>";
	?>
	<input type ='submit'  value ='Modification' > <br /></form>
	
	<?php include("../Controleur/controlAddMembres.php");?>

	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>
