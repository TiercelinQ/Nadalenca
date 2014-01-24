<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'une Piste audio</title>
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
		$id = $_GET['ida'];
		$nb = $_GET['nb'];
		//On inclue la vue qui mène au formulaire d'ajout de fichier audio
		include("../Vue/viewModificationMorceauAjoutAudio.php");
	}
	else
	{
		//Sinon, on renvoie vers la page d'accueil
		header('Location : ../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>