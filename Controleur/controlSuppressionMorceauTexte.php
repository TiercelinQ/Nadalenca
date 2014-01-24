<!DOCTYPE html>
<html>
	<head>
		<title>Suppression d'un Texte</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On récupère les informtions passés en parametre
		$id = $_GET["idt"];
		$nb = $_GET['nb'];
		//On fait appel à la fonction supprimertextenb qui supprime le fichier du serveur puis de la base de données
		$morceau = Repertoire::supprimertextenb($id, $nb);
		$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
		$tuple = mysql_fetch_array($res);
		$idr = $tuple['idr'];
		//On fait une inclusion de vue en fonction du résultat de la fonction supprimertextenb qui renvoie un boolean
		if($morceau == true)
		{
			include("../Vue/viewSuppresssionTexteMorceau.php");
		}
		else
		{
			include("../Vue/viewSuppressionTexteMorceauErreur.php");
		}
	}
	else
	{
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>