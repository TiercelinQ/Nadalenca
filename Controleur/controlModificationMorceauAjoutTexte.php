<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un fichier texte</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupère les informations passés dans le lien
	$id = $_GET['idt'];
	$nb = $_GET['nb'];
	//On inclue la vue qui mène au formulaire d'ajout de fichier texte
	include("../Vue/viewModificationMorceauAjoutTexte.php");
	//On inclue le pied de page
	include("./footer.php");
?>