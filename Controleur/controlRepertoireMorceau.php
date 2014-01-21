<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupere la donnée passé en parametre
	$id = $_GET['idr'];
	//On inclue la vue du Morceau
	include("../Vue/viewRepertoireMorceau.php");
	//On inclue le pied de page
	include("./footer.php");
?>