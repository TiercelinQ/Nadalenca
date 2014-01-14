<!DOCTYPE html>
<html>
	<head>
		<title>Membres</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
include ("./config.php");
include("./menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete
	if(isset($_SESSION['login']))
	{
	include("../Vue/viewMembreAdmin.php");
	}
	else
	{
	include("../Vue/viewMembre.php");
	}

		
	require("./footer.php");
?>