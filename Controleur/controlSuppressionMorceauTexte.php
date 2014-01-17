<!DOCTYPE html>
<html>
	<head>
		<title>Suppression d'un Texte</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
include("./menu.php");
include("../Modele/Repertoire.php");
$id = $_GET["idt"];
$nb = $_GET['nb'];
$morceau = Repertoire::supprimertextenb($id, $nb);
if($morceau == true)
{
	include("../Vue/viewSuppresssionTexteMorceau.php");
}
else
{
	include("../Vue/viewSuppressionTexteMorceauErreur.php");
}
include("./footer.php");
?>