<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupere le nom passé en paramètre
	$nom = $_POST['nomR'];
	//On fait appel à la fonction createaudio qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
	$rep = Repertoire::createaudio($nom,1,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1']);
	//On fait appel à la fonction createtexte qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
	$rep = Repertoire::createtexte($nom,1,$_FILES['texte1']['name'],$_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
	//On fait appel à la fonction createRep qui crée un nouveau tuple dans le base de données.
	$rep = Repertoire::createRep($nom);
	//On inclue la vue
	include("../Vue/viewAjoutFichierReussi.php");
	//On inclue le pied de page
	include("./footer.php");
?>

