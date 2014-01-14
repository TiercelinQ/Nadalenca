<?php
include("./menu.php");
include("../Modele/Repertoire.php");


$nomR = $_POST['nom'];
$audio = $_FILES['audio']['name'];
$texte = $_FILES['texte']['name'];
$voix1 = $_FILES['voix1']['name'];
$voix2 = $_FILES['voix2']['name'];
$voix3 = $_FILES['voix3']['name'];
$voix4 = $_FILES['voix4']['name'];

$rep = Repertoire::create($nomR, $audio, $texte, $voix1, $voix2, $voix3, $voix4);


$target_path

include ("./footer.php");
?>