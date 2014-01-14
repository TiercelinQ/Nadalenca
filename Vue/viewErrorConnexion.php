<!DOCTYPE html>
<html>
	<head>
		<title>ERREUR</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
<?php include("./menu.php"); ?>

	<h2>Erreur de connexion</h2>
	<hr />
	<p>Une erreur est survenue lors de votre connexion. <br/ > Vérifiez bien les points suivants : </p>
	<ol>	
		<li>Vous devez être inscrit pour vous connecter.</li>
		<li>L'adresse email et le mot de passe ne correspondent pas à un compte du site.</li>
	</ol>

	<p>Vous allez être redirigé vers la page de connexion.</p>
	<?php header("Refresh: 6; URL=../connexion.php"); ?>
		
<?php include("./footer.php"); ?>	