<!DOCTYPE html>
<html>
	<head>
		<title>Supprésion de morceau</title>
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
		//On récupere la donnée passé en parametre
		$id = $_GET['id'];
		//On fait appel à la fonction suppressionMorceau qui supprime tous les fichiers d'un morceau puis toutes les informations le concernant dans la base de données
		$rep = Repertoire::suppressionMorceau($id);
		//On inclue les differentes vues en focntion du résultat de la fonction suppressionMorceau qui renvoie un boolean
		if($rep == true)
		{
			include("../Vue/viewSupRep.php");
		}
		else
		{
			include("../Vue/viewSupRepErreur.php");
		}
	}
	else
	{
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>