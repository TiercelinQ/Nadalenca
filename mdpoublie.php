<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mot de passe oublié</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
<?php include("menu.php"); ?>
		<form method="POST" action="./Controleur/controlMdpoublie.php">
			<fieldset>
				<legend>Mot de passe oublié ?</legend>
					<label>Email : </label>
					<input type="email" name="email" placeholder="email" required>
					<input type="submit" value="Valider">
			</fieldset>
		</form>
					
<?php include("footer.php"); ?>