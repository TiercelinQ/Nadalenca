<!DOCTYPE html>
<html>
	<head>
		<title>ACCUEIL</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php include("./menu.php"); ?>

	<h2>Connexion Réussie</h2>
	<hr />
	<p> Vous êtes bien connecté. Vous allez être redirigé vers la page d'accueil.</p>
	<?php header("Refresh: 3; URL=../index.php"); ?>
		
<?php include("./footer.php"); ?>	
