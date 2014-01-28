<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
   	 	<link rel="icon" type="image/png" href="../Images/favicon.png" />
    </head>

<?php 
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("config.php");

	include("../Modele/Concert.php");

		$id = $_GET['id'];
		$concert = Concert::getConcertByTitre($id);
    	//On affiche la vue de validation du profil
    	include('../Vue/viewValidConcert.php');

	//On inclut le footer
	include("./footer.php"); 
?>