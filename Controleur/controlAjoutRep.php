<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
include("./menu.php");
include("../Modele/Repertoire.php");
$nbfa = $_POST['nbfa'];
$nbft = $_POST['nbft'];
include("../Vue/viewAjoutFichier.php");
include ("./footer.php");
?>