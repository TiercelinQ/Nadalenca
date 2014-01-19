<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
	
	include("./menu.php");
	
	include("../Modele/Repertoire.php");
	
	$id = $_GET['idA'];
	$nb = $_GET['nb'];

	include("../Vue/viewModificationMorceauAudio.php");
	
	include("./footer.php");
?>