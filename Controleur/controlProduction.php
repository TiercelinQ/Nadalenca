<!--On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Production</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php
	//On inclut le menu en fonction de la session en cours
	include("menu.php");

	//Requête permettant d'afficher tous les tuples de la table production
	$req="SELECT * from Production";
	//Execution de la requête
	$res =mysql_query($req);

	//On verifie qu'il y a une session en cours et que cette session soit admin
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'affichage des productions.
		include("../Vue/viewProduction.php");
	}

	//On inclut le footer
	include("footer.php"); 
?>