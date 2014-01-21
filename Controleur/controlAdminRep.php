<!DOCTYPE html>
<html>
	<head>
		<title>Répertoire</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include ("./menu.php");
	// On inclue le modele
	include ("../Modele/Repertoire.php");
	//On utilise htmlspecialchars pour que les signe spéciaux soit pris en compte comme "ç" ou "é"
	$nom = htmlspecialchars($_POST['recherche']);
	//Requête de recherche avec le mot clé LIKE
	$req = "SELECT * FROM repertoire WHERE nom LIKE '%$nom%' ORDER BY idr DESC";
	$res = mysql_query($req) or die ("Erreur insertion, Controleur Repertoire, Fonction Recherche" );
	$nb_resultats = mysql_num_rows($res);
	//Affichage des résultats en fonction du $nb_resultats
	if($nb_resultats != 0)
	{
		include("../Vue/viewAdminRepertoireResultat.php");
	}
	else
	{
		include("../Vue/viewAdminRepertoireNoresult.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>