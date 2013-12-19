<!DOCTYPE html>
<html>
	<head>
		<title>INSCRIPTION</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
<?php include("../menu.php"); ?>

	<h2>Inscription Réussie</h2>
	<p>Vous vous êtes bien inscrits. Vous allez recevoir un mail de votre inscription avec vos identifiants.</p>
	<p>Vous allez être redirigé vers la page de connexion.</p>
	<?php header("Refresh: 3; URL=../connexion.php"); ?>
		
<?php include("../footer.php"); ?>	
