<?php

require("../config.php");
require("../Modele/Production.php");
include("./menu.php");

	$idP = null;
	$nomP = $_POST["nomP"];
	$descriptionP = $_POST["descriptionP"];
	$prixP = $_POST["prixP"];
	$imageP = $_POST["imageP"];
	$production = new production($idP, $nomP, $descriptionP, $prixP, $imageP);
	$production->create();

	header('Location: ./controlProductionAdmin.php');

?>