<!DOCTYPE html>
<html>
	<head>
		<title>Vidéos Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from video"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewVideoAdmin.php");
	}
	else 
	include("../Vue/viewVideo.php");
	
	





include("./footer.php");
?>