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
var_dump($_POST);
var_dump($_FILES);
$nom = $_POST['nomR'];
$rep = Repertoire::createaudio($nom,1,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1']);
$rep = Repertoire::createtexte($nom,1,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
$rep = Repertoire::createRep($nom);
include("../Vue/viewAjoutFichierReussi.php");
include("./footer.php");
?>

