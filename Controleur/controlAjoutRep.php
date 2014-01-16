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
if($_FILES['audio']['name'] != null)
{
	$audio = $_FILES['audio']['name'];
	$audiotmp = $_FILES['audio']['tmp_name'];
}
else
{
	$audio = null;
	$audiotmp = null;
}
if($_FILES['texte']['name'] != null)
{
	$texte = $_FILES['texte']['name'];
	$textetmp = $_FILES['texte']['tmp_name'];
}
else
{
	$texte = null;
	$textetmp = null;
}
if($_FILES['alto']['name'] != null)
{
	$alto = $_FILES['alto']['name'];
	$altotmp = $_FILES['alto']['tmp_name'];
}
else
{	
	$alto = null;
	$altotmp = null;
}
if($_FILES['basse']['name'] != null)
{	
	$basse = $_FILES['basse']['name'];
	$bassetmp = $_FILES['basse']['tmp_name'];
}
else
{
	$basse = null;
	$bassetmp = null;
}
if($_FILES['soprano']['name'] != null)
{
	$soprano = $_FILES['soprano']['name'];
	$sopranotmp = $_FILES['soprano']['tmp_name'];
}
else
{
	$soprano = null;
	$sopranotmp = null;
}
if($_FILES['tenor']['name'] != null)
{
	$tenor = $_FILES['tenor']['name'];
	$tenortmp = $_FILES['tenor']['tmp_name'];
}
else
{
	$tenor = null;
	$tenortmp = null;
}

$rep = Repertoire::create($nom, $audio, $texte, $alto, $basse, $soprano, $tenor);
$rep = Repertoire::moveFile($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp);

include("../Vue/viewRepertoire.php");
include ("./footer.php");
?>