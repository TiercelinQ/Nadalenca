<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modèle
	include("../Modele/Repertoire.php");
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On récupère les informations passés dans le lien
		$id = $_GET['idt'];
		$nb = $_GET['nb'];
		//On inclue la vue contenant le formulaire de changement de fichier texte
		include("../Vue/viewModificationMorceauTexte.php");
	}
	else
	{
		//On renvoie vers l'accueil sinon
		header('Location : ../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");

?>