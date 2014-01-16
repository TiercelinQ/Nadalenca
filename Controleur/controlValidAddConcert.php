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
$titre = $_POST["titre"];
$date = $_POST["date"];
$heure = $_POST["heure"];
$minute = $_POST["minute"];
$lieu = $_POST["lieu"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$prix = $_POST["prix"];

	$concert = new concert($id, $titre, $date, $heure, $minute, $lieu, $adresse, $ville, $prix);
	$concert->create();
	header("Location:./controlAddConcert.php");


include("./footer.php");
?>
		
