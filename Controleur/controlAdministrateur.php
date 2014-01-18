<!DOCTYPE html>
<html>
	<head>
		<title>Panneau d'Administrateur</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");
	//On inclut la vue de la page administration
	include("../Vue/viewAdministration.php");
	//On inclut le footer
	include("./footer.php");
?>