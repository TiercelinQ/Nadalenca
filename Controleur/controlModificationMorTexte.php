<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php

	include("./menu.php");

	include("../Modele/Repertoire.php");

	$texte = $_FILES['texte']['name'];
	$textetmp = $_FILES['texte']['tmp_name'];
	$dest = $_POST['textedest'];
	$nb = $_POST['nb'];
	$id = $_POST['id'];

	//Appel de la fonction changementtextenb de la classe Repertoire
	$morceau = Repertoire::changementtextenb($id, $nb, $texte,$textetmp, $dest);
	if($morceau == true)
	{
		include("../Vue/viewModicationMorTexte.php");
	}
	else
	{	
		include("../Vue/viewModificationMorTexteErr.php");
	}
	include("./footer.php");
?>