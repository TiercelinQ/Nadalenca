<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
</head>

<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");
	$lang = $_GET['lang'];
	if (isset($_SESSION['login']))
	{
		if($lang == "fr")
		{
			//On affiche la vue de la page répertoire
			include("../Vue/viewRepertoireHistoire.php");
		}
		else
		{
			include("../Vue/viewRepertoireHistoireOcc.php");
		}
	}
	else 
	{
		if($lang == "fr")
		{
			include("../Vue/viewRepertoireNoMembre.php");
		}
		else
		{
			include("../Vue/viewRepertoireNoMembreOcc.php");
		}
	}
	//On inclut le footer
	include("./footer.php");
?>