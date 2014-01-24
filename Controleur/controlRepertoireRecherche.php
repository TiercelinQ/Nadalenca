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
	//On inclue le modele
	include ("../Modele/Repertoire.php");
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On récupere la donnée passé en paramètre et on utilise le htmlspecialchars pour prendre en charge les differents signes spéciaux comme "ç" ou "é"
		$nom = htmlspecialchars($_POST['recherche']);
		//On fait la requête de recherche en utilisant le mot clé LIKE
		$req = "SELECT * FROM repertoire WHERE nom LIKE '%$nom%' ORDER BY idr DESC";
		$res = mysql_query($req) or die ("Erreur insertion, Controleur Repertoire, Fonction Recherche" );
		$nb_resultats = mysql_num_rows($res);
		//On inclue les vues en fonction du résultat de la requête
		if($nb_resultats != 0)
		{
			include("../Vue/viewRepertoireResultat.php");
		}
		else
		{
			include("../Vue/viewRepertoireNoresult.php");
		}
	}
	else
	{
		header('Location : ../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>