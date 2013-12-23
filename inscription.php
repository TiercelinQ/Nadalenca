<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>INSCRIPTION</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		
		<?php include("menu.php"); ?>

				<form method="POST" action="./Controleur/controlInscription.php">
					<fieldset>
						<legend>Formulaire d'inscription</legend>
							<label>Nom : </label><input type="text" name="nom" placeholder="Nom" required>
							<label>Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required><br />
							<label>Email : </label><input type="email" name="email" placeholder="Email" required><br />
							<label>Mot de passe : </label><input type="password" name="mdp" required>
							<label>Confirmation du mot de passe : </label><input type="password" name="mdpc" required><br />
							<label>Mot de passe Nadalenca : </label><input type="password" name="mdpn" required>
								<input type="submit" value="Envoyer">
					</fieldset>
				</form>

		
			<?php include("footer.php"); ?>	
