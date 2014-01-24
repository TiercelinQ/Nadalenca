<!DOCTYPE html>
<html>
	<head>
		<title>Plan du site</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>
	
<?php 
	//On inclut le fichier config pour accéder à la base de données
	include("config.php");
	//On inclut le menu en fonction de la session en cours
	include("menu.php");

	//On vérifie que la session en cours est une session admin
	if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On affiche la vue du plan du site pour une session admin
		include("../Vue/viewPlandusiteA.php");
	}
	else if(isset($_SESSION['login']))
	{
		//On affiche la vue du plan du site en session normale
		include("../Vue/viewPlandusiteM.php");	
	}
	else
	{
		//On affiche la vue du plan du site sans session
		include("../Vue/viewPlandusiteV.php");
	}

	//On inclut le footer
	include("footer.php"); 
?>