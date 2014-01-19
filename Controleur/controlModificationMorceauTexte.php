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

	$id = $_GET['idt'];
	$nb = $_GET['nb'];
	
	include("../Vue/viewModificationMorceauTexte.php");
	
	include("./footer.php");

?>