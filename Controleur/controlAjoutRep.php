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


$nom = $_POST['nom'];
$audio = $_FILES['audio']['name'];
$audiotmp = $_FILES['audio']['tmp_name'];
$texte = $_FILES['texte']['name'];
$textetmp = $_FILES['texte']['tmp_name'];
$alto = $_FILES['alto']['name'];
$altotmp = $_FILES['alto']['tmp_name'];
$basse = $_FILES['basse']['name'];
$bassetmp = $_FILES['basse']['tmp_name'];
$soprano = $_FILES['soprano']['name'];
$sopranotmp = $_FILES['soprano']['tmp_name'];
$tenor = $_FILES['tenor']['name'];
$tenortmp = $_FILES['tenor']['tmp_name'];

$rep = Repertoire::create($nom, $audio, $texte, $alto, $basse, $soprano, $tenor);
$rep = Repertoire::moveFile($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp);

include("../Vue/viewRepertoire.php");
include ("./footer.php");
?>