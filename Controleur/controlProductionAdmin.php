<!DOCTYPE html>
<html>
	<head>
		<title>Production Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
include ("./config.php");
include("./menu.php"); 

	$req="SELECT * from production"; // requete
	$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewProductionAdmin.php");
	}
	else 
	include("../Vue/viewProduction.php");
	
	





include("./footer.php");
?>