<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>CONNEXION</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
<?php include("menu.php"); ?>

			<form method="POST" action="./Controleur/controlConnexion.php">
					<fieldset>
						<legend>Formulaire de connexion</legend>
							<label>Email: </label><input type="email" name="email" placeholder="email" required>
							<label>Mot de Passe: </label><input type="password" name="mdp" required>
								<input type="submit" value="Connexion">
					</fieldset>
			</form>
		
	<?php include("footer.php"); ?>
