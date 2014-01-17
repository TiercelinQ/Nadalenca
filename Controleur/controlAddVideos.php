<?php

require("../config.php");
require("../Modele/Video.php");
include("./menu.php");

if (!isset($_POST['lienV']) OR !isset($_POST['descriptionV']))
{
	include('../Vue/viewErrorAddVideo.php'); 
}
else if(empty($_POST['lienV']) OR empty($_POST['descriptionV']))
{
	include('../Vue/viewErrorAddVideo.php'); 
}
else
{


	$id = null;
	$titreV = $_POST["titreV"];
	$lienV = substr($_POST["lienV"], 31);
	$descriptionV = $_POST["descriptionV"];
	$video = new video($id, $titreV, $lienV, $descriptionV);
	$video->create();

	header('Location: ./controlVideosAdmin.php');
}
?>
