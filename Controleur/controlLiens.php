<!DOCTYPE html>
<html>
	<head>
		<title>Liens</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from lien"; // requete
$res =mysql_query($req); // envoi de la requete

include("../Vue/viewLiens.php");

include("./footer.php");
?>