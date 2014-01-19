<?php
//On inclut le fichier config pour accéder à la base de données
require("../config.php");
//On récupère la Class Lien pour créer un nouveau lien
require("../Modele/Lien.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php");

//On vérifie que le lien et la description ne sont pas bon
if (!isset($_POST['lien']) OR !isset($_POST['description']))
{
	//si c'est le cas, on affiche la vue d'erreur d'ajout d'un lien
	include('../Vue/viewErrorAddLiens.php'); 
}
//On vérifie que le lien ou la description ne sont pas vides
else if(empty($_POST['lien']) OR empty($_POST['description']))
{
	//Si c'est le cas, on affiche la vue d'erreur d'ajout d'un lien
	include('../Vue/viewErrorAddLiens.php'); 
}
else
{
	//Sinon, on peut créer un nouveau lien
	//La valeur $id est à null car l'attribut dans la base de données s'incrémente automatiquement
	$id = null;
	//La valeur $lien prend le contenu entré dans le case "lien"
	$lien = $_POST["lien"];
	//La valeur $description prend le contenu entré dans la case "description"
	$description = $_POST["description"];
	//Création d'un nouveau lien
	$liens = new lien($id, $description, $lien);
	//On ajoute dans la base de données un nouveau lien
	$liens->create();

	//on affiche la page de gestion des liens du panneau d'administration
	header('Location: ./controlLiensAdmin.php');
}
?>