<!DOCTYPE html>
<html>
	<head>
		<title>Vidéo</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
include ("./config.php");
include("./menu.php"); 
	
	$req="SELECT * from video"; // requete
	$res =mysql_query($req); // envoi de la requete
include("../Vue/viewVideo.php");
include("./footer.php");
?>