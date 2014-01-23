<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	require("../config.php");
	//On récupère la Class Concert
	require("../Modele/Mdp.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");

//addslashes -> Ajoute des antislashs dans une chaîne
//htmlspecialchars -> Convertit les caractères spéciaux en entités HTML
//La variable ci-dessous récupèrent les données qui leur sont propres

$mdpI = addslashes(htmlspecialchars($_POST["mdpI"]));

	Mdp::update($mdpI);

	//Redirection vers la page d'ajout d'un concert
	header("Location:./controlMDPAdmin.php");

	//On incklut le footer
	include("./footer.php");
?>
		