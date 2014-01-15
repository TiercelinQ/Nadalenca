<?php
include("./menu.php");
include("../Modele/Repertoire.php");


$nomR = $_POST['nom'];
$audio = $_FILES['audio']['name'];
$target_pathaudio = "../Audio/";
$target_pathaudio = $target_pathaudio . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);
$texte = $_FILES['texte']['name'];
$target_pathtexte = "../Texte/";
$target_pathtexte = $target_pathtexte . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);
$voix1 = $_FILES['voix1']['name'];
$target_pathvoix1 = "../Voix/Voix1";
$target_pathvoix1 = $target_pathvoix1 . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);
$voix2 = $_FILES['voix2']['name'];
$target_pathvoix2 = "../Voix/Voix2";
$target_pathvoix2 = $target_pathvoix2 . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);
$voix3 = $_FILES['voix3']['name'];
$target_pathvoix3 = "../Voix/Voix3";
$target_pathvoix3 = $target_pathvoix3 . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);
$voix4 = $_FILES['voix4']['name'];
$target_pathvoix4 = "../Voix/Voix4";
$target_pathvoix4 = $target_pathvoix4 . basename( $_FILES['audio']['name']); 
echo $target_path;
move_uploaded_file($_FILES['audio']['tmp_name'], $target_pathaudio);

$rep = Repertoire::create($nomR, $audio, $texte, $voix1, $voix2, $voix3, $voix4);




include ("./footer.php");
?>