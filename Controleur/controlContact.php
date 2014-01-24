<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>
	
<?php
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 
	//Requête permettant d'afficher les informations de contact
	$req="SELECT * FROM contact";
	//On execute la requête
	$res =mysql_query($req);
	$tuple = mysql_fetch_array($res);
	
	//On inclut la vue d'affichage des concerts
	include ("../Vue/viewContact.php");	
	//On inclut le footer
	require("./footer.php");
?>