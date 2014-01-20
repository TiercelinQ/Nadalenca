<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un fichier texte</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	include("./menu.php");
	include("../Modele/Repertoire.php");
	$id = $_GET['idt'];
	$nb = $_GET['nb'];
	include("../Vue/viewModificationMorceauAjoutTexte.php");
	include("./footer.php");
?>