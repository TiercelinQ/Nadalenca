<!DOCTYPE html>
<html>
	<head>
		<title>Recrutement envoyé</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>

<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On récupère la Class Message
	include("../Modele/Recrutement.php");

//htmlspecialchars -> Convertit les caractères spéciaux en entités HTML
//Les variables prennent les valeurs qui leur sont attribuées
$idR = null;
$nomR = htmlspecialchars($_POST["nomR"]);
$prenomR = htmlspecialchars($_POST["prenomR"]);
$expeR = htmlspecialchars($_POST["expeR"]);
$occR = htmlspecialchars($_POST["occR"]);
$telR = htmlspecialchars($_POST["telR"]);
$portableR = htmlspecialchars($_POST["portableR"]);
$emailR = htmlspecialchars($_POST["emailR"]);
$obsR = htmlspecialchars($_POST["obsR"]);


	//Création d'un nouveau message
	$recrutement = new Recrutement($idR, $nomR, $prenomR, $expeR, $occR, $telR, $portableR, $emailR, $obsR);
	//Ajout du mesage
	$recrutement->create();

	//On inclut la page de validation de l'envoie d'un message à l'admin
	include('../Vue/viewValidContact.php');
	//On inclut le footer		
	include("./footer.php");
?>
