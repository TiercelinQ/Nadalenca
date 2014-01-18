<?php
//On inclut le fichier config pour accéder à la base de données
require("../config.php");
//On récupère la Classe Vidéo
require("../Modele/Video.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php");

//Si LienV et DescriptionV ne sont pas bon
if (!isset($_POST['lienV']) OR !isset($_POST['descriptionV']))
{
	//On inclut la vue d'erreur d'ajout d'une vidéo
	include('../Vue/viewErrorAddVideo.php'); 
}
//si lienV et descriptionV sont vides
else if(empty($_POST['lienV']) OR empty($_POST['descriptionV']))
{
	//On inclut la vue d'erreur d'ajout d'une vidéo
	include('../Vue/viewErrorAddVideo.php'); 
}
else
{
	//La valeur $id prend null car dans la base de données, son attribut s'incrémente automatique
	$id = null;
	//La valeur $titreV prend le contenu de la case titrev
	$titreV = $_POST["titreV"];
	//La valeur $lienV prend le contneu de la case lienV seulement après les 31 premiers caractères
	$lienV = substr($_POST["lienV"], 31);
	//La valeur $descriptionV prend le contenu de la case descriptionV
	$descriptionV = $_POST["descriptionV"];
	//Création d'une nouvelle vidéo
	$video = new video($id, $titreV, $lienV, $descriptionV);
	//Ajout de la nouvelle vidéo dans la base de données
	$video->create();

	//Redirection vers le contrôle de la gestion des vidéos en session admin
	header('Location: ./controlVideosAdmin.php');
}
?>
