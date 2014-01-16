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
$jour = $_POST["jour"];
$date = $_POST["date"];
$heure = $_POST["heure"];
$minute = $_POST["minute"];
$lieu = $_POST["lieu"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];

if(empty($titre))
{
	include('../Vue/viewErrorAddImage.php'); 
}
else if(empty($jour))
{
	include('../Vue/viewErrorAddImage.php'); 
}
else if(empty($date))
{
	include('../Vue/viewErrorAddImage.php'); 
}
else if(empty($heure))
{
	include('../Vue/viewErrorAddImage.php'); 
}

else if(empty($minute))
{
	include('../Vue/viewErrorAddImage.php'); 
}

else if(empty($lieu))
{
	include('../Vue/viewErrorAddImage.php'); 
}

else if(empty($adresse))
{
	include('../Vue/viewErrorAddImage.php'); 
}

else if(empty($ville))
{
	include('../Vue/viewErrorAddImage.php'); 
}
else
{
	$concert = new concert($id, $titre, $jour, $date, $heure, $minute, $lieu, $adresse, $ville);
	concert->create();
	include('../Vue/viewValidInscription.php');
}

include("./footer.php");
?>
		
