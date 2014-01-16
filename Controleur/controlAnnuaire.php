<!DOCTYPE html>
<html>
	<head>
		<title>Annuaire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
include ("./config.php");
include("./menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete

	if (isset($_SESSION['login']))
	{
		include("../Vue/viewAnnuaire.php");
	}
	else 
	{
		include("../Vue/viewErrorMembre.php");
	}

		
	require("./footer.php");
?>