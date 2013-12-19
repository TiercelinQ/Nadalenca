<!DOCTYPE html>
<html>
	<head>
		<title>ERREUR</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css" />
	</head>
	
<?php include("../menu.php"); ?>

	<p>Une erreur est survenue lors de votre inscription. <br/ > Vérifiez bien les points suivants: </p>
	<ol>	
		<li>L'adresse email ne doit pas être déjà utilisée.</li>
		<li>Le mot de passe ainsi que le mot de passe de confirmation doivent être identiques.</li>
		<li>Vous devez entrer le bon mot de passe de l'association NADALENCA.</li>
	</ol>

	<p>Vous allez être redirigé vers la page d'incription.</p>
	<?php header("Refresh: 5; URL=../inscription.php"); ?>
		
<?php include("../footer.php"); ?>	
