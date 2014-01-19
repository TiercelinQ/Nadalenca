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
	require("../Modele/Concert.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");

//addslashes -> Ajoute des antislashs dans une chaîne
//htmlspecialchars -> Convertit les caractères spéciaux en entités HTML
//La variable ci-dessous récupèrent les données qui leur sont propres
$id=null;
$titre = addslashes(htmlspecialchars($_POST["titre"]));
$date = htmlspecialchars($_POST["date"]);
$heure = htmlspecialchars($_POST["heure"]);
$minute = htmlspecialchars($_POST["minute"]);
$lieu = addslashes(htmlspecialchars($_POST["lieu"]));
$adresse = htmlspecialchars($_POST["adresse"]);
$ville = htmlspecialchars($_POST["ville"]);
$prix = htmlspecialchars($_POST["prix"]);

	//Création d'un nouveau concert
	$concert = new concert($id, $titre, $date, $heure, $minute, $lieu, $adresse, $ville, $prix);
	//Ajout d'un nouveau concert dans la base de données
	$concert->create();

	//Redirection vers la page d'ajout d'un concert
	header("Location:./controlAddConcert.php");

	//On incklut le footer
	include("./footer.php");
?>
		
