<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_GET['nomR']; ?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>


<?php
	include("./menu.php");
	include("./config.php");
	$nom = $_GET['nomR'];
	include("../Vue/viewRepertoire.php");
	include("./footer.php");
?>
	