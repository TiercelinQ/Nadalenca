<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	require("../config.php");
	//On récupère la Class Concert
	require("../Modele/Noel.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");

//addslashes -> Ajoute des antislashs dans une chaîne
//htmlspecialchars -> Convertit les caractères spéciaux en entités HTML
//La variable ci-dessous récupèrent les données qui leur sont propres
$id=null;
$lieuN = addslashes(htmlspecialchars($_POST["lieuN"]));
$dateDebN = htmlspecialchars($_POST["dateDebN"]);
$dateFinN = htmlspecialchars($_POST["dateFinN"]);

	//Création d'un nouveau concert
	$noel = new noel($id, $lieuN, $dateDebN, $dateFinN);
	//Ajout d'un nouveau concert dans la base de données
	$noel->create();

	//Redirection vers la page d'ajout d'un concert
	header("Location:./controlAddNoel.php");

	//On incklut le footer
	include("./footer.php");
?>
		
