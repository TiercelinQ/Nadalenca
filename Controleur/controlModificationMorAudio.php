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
	$id = $_POST['id'];
	$res = mysql_query("SELECT * FROM repertoire WHERE idA ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	if($_FILES['audio']['error']!=4)
	{
		$extensions_valides = array( 'mp3', 'aac', 'ogg','wav');
		//On récupère l'extension du fichier
		$extension = strtolower(  substr(  strrchr($_FILES['audio']['name'], '.')  ,1)  );
		//Si l'extension n'est pas pris en charge, on envoie vers un page d'erreur qui redirige vers la page du morceau
		if(!(in_array($extension,$extensions_valides)))
		{
			include("../Vue/viewModificationMorAudioExt.php");
		}
		else
		{
			//On récupère les données du formulaire de modification de fichier audio
			$audio = $_FILES['audio']['name'];
			$audiotmp = $_FILES['audio']['tmp_name'];
			$dest = $_POST['audiodest'];
			$nb = $_POST['nb'];
			

			//Appel de la classe changementaudionb de la classe Utilisateur
			$morceau = Repertoire::changementaudionb($id, $nb, $audio,$audiotmp, $dest, $extension);
			//On inclue les différentes vue en fonction du résultat de la fonction changementaudionb qui renvoie un boolean
			if($morceau == true)
			{
				include("../Vue/viewModicationMorAudio.php");
			}
			else
			{	
				include("../Vue/viewModificationMorAudioErr.php");
			}
		}
	}
	//S'il n'y a pas de fichier dans le formulaire
	else
	{
		include("../Vue/viewModificationMorAudioEmpty.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>