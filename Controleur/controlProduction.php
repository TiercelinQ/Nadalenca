<!DOCTYPE html>
<html>
	<head>
		<title>Productions</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>
	
<?php
	//On inclut le fichier config pour accéder à la base de données
	include("config.php")
	
	//On inclut le menu en fonction de la session en cours
	include("menu.php");

	//Requête permettant d'afficher tous les tuples de la table production
	$req="SELECT * from Production";
	//Execution de la requête
	$res =mysql_query($req);

	
		//On inclut la vue d'affichage des productions.
		include("../Vue/viewProduction.php");


	//On inclut le footer
	include("footer.php"); 
?>