<!DOCTYPE html>
<html>
	<head>
		<title>Panneau d'Administrateur</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
</head>
<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue de la page administration
		include("../Vue/viewAdministration.php");
	}
	else
	{
		//On affiche la vue erreur
		include("../Vue/viewErrorMembre.php");
	}
	//On inclut le footer
	include("./footer.php");
?>