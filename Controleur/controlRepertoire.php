

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
	if (isset($_SESSION['login']))
	{
	//On affiche la vue de la page répertoire
	include("../Vue/viewRepertoire.php");
	}
	else 
	{
		//On inclut la vue d'erreur
		include("../Vue/viewErrorMembre.php");
	}
	//On inclut le footer
	include("./footer.php");
?>