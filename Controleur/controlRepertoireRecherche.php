<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php

	include ("./menu.php");
	
	include ("../Modele/Repertoire.php");

	$nom = htmlspecialchars($_POST['recherche']);
	
	$req = "SELECT * FROM repertoire WHERE nom LIKE '%$nom%' ORDER BY idr DESC";
	$res = mysql_query($req) or die ("Erreur insertion, Controleur Repertoire, Fonction Recherche" );
	$nb_resultats = mysql_num_rows($res);

	if($nb_resultats != 0)
	{
		include("../Vue/viewRepertoireResultat.php");
	}
	else
	{
		include("../Vue/viewRepertoireNoresult.php");
	}
	include("./footer.php");
?>