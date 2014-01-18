<!DOCTYPE html>
<html>
	<head>
		<title>Membres</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table utilisateur
	$req="SELECT * from utilisateur";
	//Execution de la requête
	$res =mysql_query($req);

	//Vérification s'il y a une session en cours et que cette session est administrateur
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'affichage de la page de gestion des membres
		include("../Vue/viewMembreAdmin.php");
	}
	else if (isset($_SESSION['login']))
	{
		//On inclut la vue d'affichage de la page des membres
		include("../Vue/viewMembre.php");
	}
	else 
	{
		//On affiche la vue erreur
		include("../Vue/viewErrorMembre.php");
	}

	//On inclut le footer
	require("./footer.php");
?>