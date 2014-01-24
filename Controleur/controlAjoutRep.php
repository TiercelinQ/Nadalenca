<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclue la vue qui permet d'ajouter des fichier
		include("../Vue/viewAjoutFichier.php");
	}
	else
	{
		//Sinon, on renvoie vers la page d'accueil
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include ("./footer.php");
?>