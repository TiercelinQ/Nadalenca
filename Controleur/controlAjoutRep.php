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


echo $_POST['nom'];
$nomaudio =$_FILES['audio']['name'];
echo $nomaudio;
$target_path = "../audio/";

$target_path = $target_path . basename( $_FILES['audio']['name']); 

echo $_FILES['audio']['tmp_name'];
echo $target_path;
if(move_uploaded_file($_FILES['audio']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['audio']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

include ("./footer.php");
?>