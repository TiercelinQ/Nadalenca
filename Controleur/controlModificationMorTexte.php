<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupère les informations du formulaire
	$texte = $_FILES['texte']['name'];
	$textetmp = $_FILES['texte']['tmp_name'];
	$dest = $_POST['textedest'];
	$nb = $_POST['nb'];
	$id = $_POST['id'];

	//Appel de la fonction changementtextenb de la classe Repertoire
	$morceau = Repertoire::changementtextenb($id, $nb, $texte,$textetmp, $dest);
	$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	//On inclue les differentes vues en fonction de la réponse de changementtextenb qui renvoie un boolean
	if($morceau == true)
	{
		include("../Vue/viewModicationMorTexte.php");
	}
	else
	{	
		include("../Vue/viewModificationMorTexteErr.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>