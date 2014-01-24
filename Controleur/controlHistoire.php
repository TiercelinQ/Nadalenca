
<!DOCTYPE html>
<html>
	<head>
		<title>Histoire</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>
	
<?php 
  //On inclut le fichier config pour accéder à la base de données
  include("config.php");
	//On inclut le menu en fonction de la session en cous
	include("menu.php");
	$lang = $_GET['lang'];
	if($lang == "fr")
	{
		//On inclut la vue d'affichage de la page histoire
		include("../Vue/viewHistoire.php");
	}
	else
	{
		include("../Vue/viewHistoireOcc.php");
	}
	//On inclut le footer
	include("footer.php"); 
?>