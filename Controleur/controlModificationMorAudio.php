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
	//On récupère les données du formulaire de modification de fichier audio
	$audio = $_FILES['audio']['name'];
	$audiotmp = $_FILES['audio']['tmp_name'];
	$dest = $_POST['audiodest'];
	$nb = $_POST['nb'];
	$id = $_POST['id'];

	//Appel de la classe changementaudionb de la classe Utilisateur
	$morceau = Repertoire::changementaudionb($id, $nb, $audio,$audiotmp, $dest);
	$res = mysql_query("SELECT * FROM repertoire WHERE idA ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	//On inclue les différentes vue en fonction du résultat de la fonction changementaudionb qui renvoie un boolean
	if($morceau == true)
	{
		include("../Vue/viewModicationMorAudio.php");
	}
	else
	{	
		include("../Vue/viewModificationMorAudioErr.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>