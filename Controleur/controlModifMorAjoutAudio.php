<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'une Piste audio</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupere les données passès en paramètre avec ici le nb qui représente le numéro du fichier à ajouter
	$id = $_POST['id'];
	$nb = $_POST['nb'];
	//On fait les appels en fonction du numéro du fichier qui est envoyé en paramètre
	switch($nb)
	{
		case 2:
			$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2']);
			break;
		case 3:
			$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3']);
			break;
		case 4:
			$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['taudio4']);
			break;
		case 5:
			$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio5']['name'], $_FILES['audio5']['tmp_name'], $_POST['taudio5']);
			break;
	}
	$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	//On inclue les differentes vues en fonction du résultat ajoutFichierAudio qui renvoie un boolean
	if($rep ==true)
	{
		include("../Vue/viewModifMorAjoutAudio.php");
	}
	else
	{
		include("../Vue/viewModifMorAjoutAudioErr.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>