<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Production</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
include("menu.php");
	$req="SELECT * from Production"; // requete
	$res =mysql_query($req); // envoi de la requete
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
include("../Vue/viewProduction.php");
include("footer.php"); 
?>