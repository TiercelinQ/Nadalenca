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
$voix1 = $_FILES['voix1']['name'];
$voix1tmp = $_FILES['voix1']['tmp_name'];
$voix2 = $_FILES['voix2']['name'];
$voix2tmp = $_FILES['voix2']['tmp_name'];
$voix3 = $_FILES['voix3']['name'];
$voix3tmp = $_FILES['voix3']['tmp_name'];
$voix4 = $_FILES['voix4']['name'];
$voix4tmp = $_FILES['voix4']['tmp_name'];

$rep = Repertoire::create($nom, $audio, $texte, $voix1, $voix2, $voix3, $voix4);
$rep = Repertoire::moveFile($audio, $audiotmp, $texte, $textetmp, $voix1, $voix1tmp, $voix2, $voix2tmp, $voix3, $voix3tmp, $voix4, $voix4tmp);

include("../Vue/viewRepertoire.php");
include ("./footer.php");
?>