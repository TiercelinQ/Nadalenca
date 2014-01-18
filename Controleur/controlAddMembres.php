<!-- On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription Administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
	//On inclut la vue permettant d'ajouter un nouveau membre dans la base de données
	include("../Vue/viewAddMembres.php");
?>