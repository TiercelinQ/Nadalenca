<h1>Annuaire des membres de l'association</h1>
<hr />

	<table border = "1">
		<tr>
			<td>id</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Adresse Email</td>
			<td>Admin</td>
			<td>ChangerStatut</td>
			<td>Supprimer membre</td>

	<form action='controlMembresAdmin.php' method='post'>	
<?php
	while ($tuple = mysql_fetch_array($res))
	{ 
		echo"<tr>"
			."<td>".$tuple['id']."</td>"
			."<td>".$tuple['nom']."</td>"
			."<td>".$tuple['prenom']."</td>"
			."<td>".$tuple['email']."</td>"
			."<td>".$tuple['admin']."</td>"
			."<td>"."<input type='checkbox' name='email[]' value='$tuple[email]'/>"."<br /></td>" 
			."<td>"."<input type='checkbox' name='idDelete[]' value='$tuple[id]'/>"."<br /></td>"
			."</tr>";
			
	}
		echo "</table><br/>";
	?>
	<input type ='submit'  value ='Supression' > <br /></form>
	<a href="./controlAddMembres.php">Ajouter Membre</a><br />
