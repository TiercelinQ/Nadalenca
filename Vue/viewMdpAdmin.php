<h1>Modification du mot de passe d'inscription</h1>
<hr />

	<table border = "1">
		<tr>
			<th>Mot de passe actuel</th>		
<?php
include("../Modele/Mdp.php");
	while ($tuple = mysql_fetch_array($res))
	{ 	
		$i = $tuple['id'];
		echo "<tr>"
				."<td>".$tuple['mdpInscri']."</td></tr>";
	}
		echo "</table>";
	?>

<h2>Nouveau mot de passe</h2>
<hr />

<form method="POST" action="./controlValidMdpInscri.php" onSubmit="return verif();">
	<fieldset>
			<input type="text" name="mdpI" required><br />
			<input type="submit" value="Envoyer"><br />
		</fieldset>
</form>

<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>