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
	$audio = $_FILES['audio']['name'];
	$audiotmp = $_FILES['audio']['tmp_name'];
	$dest = $_POST['audiodest'];
	$nb = $_POST['nb'];
	$id = $_POST['id'];
	$morceau = Repertoire::changementaudionb($id, $nb, $audio,$audiotmp, $dest);
	if($morceau == true)
	{
		include("../Vue/viewModicationMorAudio.php");
	}
	else
	{	
		include("../Vue/viewModificationMorAudioErr.php");
	}
	include("./footer.php");
?>