<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On récupère la Class Répertoire
	include("../Modele/Repertoire.php");
	//On inclut la vue d'ajout d'un répertoire
	include("../Vue/viewAjoutRep.php");
	//On inclut le footer
	include("./footer.php");
?>