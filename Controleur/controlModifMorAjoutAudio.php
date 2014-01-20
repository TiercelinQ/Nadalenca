<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'une Piste audio</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	include("./menu.php");
	include("../Modele/Repertoire.php");
	$id = $_POST['id'];
	$nb = $_POST['nb'];
	
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
	if($rep ==true)
	{
		include("../Vue/viewModifMorAjoutAudio.php");
	}
	else
	{
		include("../Vue/viewModifMorAjoutAudioErr.php");
	}
	include("./footer.php");
?>