<!DOCTYPE html>
<html>
	<head>
		<title>Annuaire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
</head>
<?php
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 

	//Requête affichant tous les tuples de la table utilisateur
	$req="SELECT * from utilisateur";
	//Execution de la requête précédente
	$res =mysql_query($req);

	//Si une sessio est en cours
	if (isset($_SESSION['login']))
	{
		//On inclut la vue de l'annuaire des membres
		include("../Vue/viewAnnuaire.php");
	}
	else 
	{
		//On inclut la vue d'erreur
		include("../Vue/viewErrorMembre.php");
	}
	//On inclut le footer
	require("./footer.php");
?>