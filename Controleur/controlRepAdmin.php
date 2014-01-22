<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	//On inclut le menu en fonction de la session en cours	
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On affiche la vue de la page de gestion des répertoires en session admin
		include("../Vue/viewAdminRep.php");
	}
	else if(isset($_SESSION['login']))
	{
		include("../Vue/viewRepertoire.php");	
	}
	else
	{ 
		//Sinon on affiche la vue des images d'une session normale
		include("../Vue/viewErrorCoAdmin.php");
	}
	//On inclut le footer
	include("./footer.php");
?>