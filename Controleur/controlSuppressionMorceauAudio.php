<!DOCTYPE html>
<html>
	<head>
		<title>Suppression d'une Piste audio</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupere les informations passés en paramètre
	$id = $_GET["ida"];
	$nb = $_GET['nb'];
	//On fait un appel à la fonction supprimeraudionb qui supprime un fichier du serveur et qui le supprime de la base de données
	$morceau = Repertoire::supprimeraudionb($id, $nb);
	$res = mysql_query("SELECT * FROM repertoire WHERE idA ='$id'") or die ("Erreur /controlSuppressionMorceauAudio/ res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	//On inclue les vues en fonction du résultat de supprimeraudionb qui renvoie un boolena
	if($morceau == true)
	{
		include("../Vue/viewSuppresssionAudioMorceau.php");
	}
	else
	{
		include("../Vue/viewSuppressionAudioMorceauErreur.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>