<!DOCTYPE html>
<html>
	<head>
		<title>Images</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
include ("./config.php");
include("./menu.php"); 
	
	$req="SELECT * from image"; // requete
	$res =mysql_query($req); // envoi de la requete
include("../Vue/viewImage.php");
include("./footer.php");
?>