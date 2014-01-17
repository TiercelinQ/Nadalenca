<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	<?php

require("../config.php");
require("../Modele/Concert.php");
include("./menu.php");


$id=null;
$titre = addslashes(htmlspecialchars($_POST["titre"]));
$date = htmlspecialchars($_POST["date"]);
$heure = htmlspecialchars($_POST["heure"]);
$minute = htmlspecialchars($_POST["minute"]);
$lieu = addslashes(htmlspecialchars($_POST["lieu"]));
$adresse = htmlspecialchars($_POST["adresse"]);
$ville = htmlspecialchars($_POST["ville"]);
$prix = htmlspecialchars($_POST["prix"]);

	$concert = new concert($id, $titre, $date, $heure, $minute, $lieu, $adresse, $ville, $prix);
	$concert->create();
	header("Location:./controlAddConcert.php");


include("./footer.php");
?>
		
