<!DOCTYPE html>
<html>
	<head>
		<title>Modification de morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	include("./menu.php");
	include("../Modele/Repertoire.php");
	$id = $_GET['id'];
	$rep = Repertoire::getRepById($id);
	include("../Vue/viewModifierRep.php");
	include("./footer.php");
?>