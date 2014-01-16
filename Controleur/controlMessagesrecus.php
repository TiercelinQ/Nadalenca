<!DOCTYPE html>
<html>
	<head>
		<title>Messages reçus</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	include("./menu.php");
	include("./config.php");

	$req="SELECT * from message order by dateM ASC "; // requête 
	$res =mysql_query($req); // envoi de la requete
	
		
	include("../Vue/viewMessagesrecus.php");
	include("./footer.php");
?>