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

	$idR = $_GET['idr'];

	include("../Vue/viewModificationMorceau.php");

	include("./footer.php");
?>