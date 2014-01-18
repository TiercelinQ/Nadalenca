<!-- On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Histoire</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
	//On inclut le menu en fonction de la session en cous
	include("menu.php");
	//On inclut la vue d'affichage de la page histoire
	include("../Vue/viewHistoire.php");
	//On inclut le footer
	include("footer.php"); 
?>