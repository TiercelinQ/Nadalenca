<!DOCTYPE html>
<html>
	<head>
		<title>Images</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	include ("./config.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php"); 
	
	//Requête permettant d'afficher l'ensemble des tuples de la table image
	$req="SELECT * from image";
	//Execution de la requête
	$res =mysql_query($req);

	//On inclut la vue d'affichage des images
	include("../Vue/viewImage.php");
	//On inclut le footer
	include("./footer.php");
?>