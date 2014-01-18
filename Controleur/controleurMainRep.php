<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");
	//On inclut la vue permettant l'affichage des répertoires
	include("../Vue/viewRepMain.php");
	//On inclut le footer
	include("./footer.php");
?>