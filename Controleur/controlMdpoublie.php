<!DOCTYPE html>
<html>
	<head>
		<title>Mot de passe oublié</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
	//On inclut le fichier config pour accéder à la base de données
	include("config.php")
	//On inclut le menu en fonction de la session en cours
	include("menu.php");
	//On affiche la vue de la page mot de passe oublié
	include("../Vue/viewMdpoublie.php");
	//On inclut le footer
	include("footer.php");
?>