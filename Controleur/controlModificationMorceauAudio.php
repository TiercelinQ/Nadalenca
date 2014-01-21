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
	//On récupère les informations passés dans le lien
	$id = $_GET['ida'];
	$nb = $_GET['nb'];
	//On inclue la vue contenant le formulaire de changement de fichier audio
	include("../Vue/viewModificationMorceauAudio.php");
	//On inclue le pied de page
	include("./footer.php");
?>