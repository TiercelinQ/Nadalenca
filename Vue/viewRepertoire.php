<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<title><?php echo ($_GET['nomR']); ?></title>
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

	<?php
	include ("../config.php");
	$nom = $_GET['nomR'];
	$res = mysql_query("SELECT * FROM repertoire WHERE nomR = '$nom'") or die ("Erreur insertion, viewRepertoire, res");
	
	$tuple = mysql_fetch_array($res);
	
	echo $tuple['idR'].$tuple['nomR'].$tuple['texteR'];
	
	?>
