<?php

require("../config.php");
require("../Modele/Lien.php");
include("./menu.php");

if (!isset($_POST['lien']) OR !isset($_POST['description']))
{
	include('../Vue/viewErrorAddLiens.php'); 
}
else if(empty($_POST['lien']) OR empty($_POST['description']))
{
	include('../Vue/viewErrorAddLiens.php'); 
}
else
{


	$id = null;
	$lien = $_POST["lien"];
	$description = $_POST["description"];
	$liens = new lien($id, $description, $lien);
	$liens->create($description, $lien);

	header('Location: ./controlLiensAdmin.php');
}
?>