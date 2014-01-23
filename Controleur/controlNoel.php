<!DOCTYPE html>
<html>
	<head>
		<title>Noël Occitan</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php
//On inclut le fichier config pour accéder à la base de donnéesg
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 
	//Requête permettant d'afficher les concerts de la dateC jusqu'à la date de maintenant
	$req="SELECT * from noel order by dateDebN ASC ";
	//On execute la requête
	$res =mysql_query($req);
	
	//On inclut la vue d'affichage des concerts
	include ("../Vue/viewNoel.php");	
	//On inclut le footer
	require("./footer.php");
?>

