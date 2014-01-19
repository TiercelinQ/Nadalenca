<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'une Piste audio</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php

	include("./menu.php");

	include("../Modele/Repertoire.php");

	$id = $_GET['ida'];
	$nb = $_GET['nb'];


	include("../Vue/viewModificationMorceauAjoutAudio.php");

	include("./footer.php");
?>