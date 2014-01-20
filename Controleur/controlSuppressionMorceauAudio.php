<!DOCTYPE html>
<html>
	<head>
		<title>Suppression d'une Piste audio</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
include("./menu.php");
include("../Modele/Repertoire.php");
$id = $_GET["ida"];
$nb = $_GET['nb'];
$morceau = Repertoire::supprimeraudionb($id, $nb);
$res = mysql_query("SELECT * FROM repertoire WHERE idA ='$id'") or die ("Erreur /controlSuppressionMorceauAudio/ res");
$tuple = mysql_fetch_array($res);
$idr = $tuple['idr'];
if($morceau == true)
{
	include("../Vue/viewSuppresssionAudioMorceau.php");
}
else
{
	include("../Vue/viewSuppressionAudioMorceauErreur.php");
}
include("./footer.php");
?>