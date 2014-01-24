<!DOCTYPE html>
<html>
	<head>
		<title>Concerts</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>
	
<?php
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 
	//Requête permettant d'afficher les concerts de la dateC jusqu'à la date de maintenant
	$req="SELECT * from concert where dateC>now() order by dateC ASC ";
	//On execute la requête
	$res1 =mysql_query($req);
	
	//Requête permettant d'afficher les concerts de la date de maintenant jusqu'à la dateC
	$req="SELECT * from concert where dateC<now() order by dateC ASC ";
	//On execute la requête
	$res2 =mysql_query($req);
	
	//On inclut la vue d'affichage des concerts
	include ("../Vue/viewConcert.php");	
	//On inclut le footer
	require("./footer.php");
?>

