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
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupère l'id passé en paramètre dans le lien
	$idR = $_GET['idr'];
	//On inclue la vue de modification morceau qui comprends la liste des fichier avec la possibilité d'en ajouter, de les modifier ou de supprimer
	include("../Vue/viewModificationMorceau.php");
	//On inclue le pied de page
	include("./footer.php");
?>