<!DOCTYPE html>
<html>
	<head>
		<title>Supprésion de morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>


<?php

	include("./menu.php");

	include("../Modele/Repertoire.php");

	$id = $_GET['id'];

	$rep = Repertoire::suppressionMorceau($id);

	if($rep == true)
	{
		include("../Vue/viewSupRep.php");
	}
	else
	{
		include("../Vue/viewSupRepErreur.php");
	}
	include("./footer.php");
	
?>