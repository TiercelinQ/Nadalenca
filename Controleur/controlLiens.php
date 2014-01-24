<!DOCTYPE html>
<html>
	<head>
		<title>Liens</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	include ("./config.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table lien
	$req="SELECT * from lien";
	//Execution de la requête
	$res =mysql_query($req);

	//On inclut la vue d'affichage de la page lien
	include("../Vue/viewLiens.php");
	//On inclut le footer
	include("./footer.php");
?>