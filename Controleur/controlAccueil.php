<!--On inclus le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
//On inclut le menu dans le controleur
include("menu.php");
//On inclut la vue pour afficher la page d'accueil au niveau de son contenu
$langue = $_GET['lang'];
if($langue == "fr")
{
	include("../Vue/viewAccueil.php");
}
else
{
	include("../Vue/viewAccueilOcc.php");
}
//On inclut le footer dans la page d'accueil
include("footer.php"); 
?>