<!DOCTYPE html>
<html>
	<head>
		
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
include("./menu.php");
require("../config.php");

if (!isset($_POST['mdp']) OR !isset($_POST['email']))
{
	include('../Vue/viewErrorConnexion.php'); 
}
else if(empty($_POST['mdp']) OR empty($_POST['email']))
{
	include('../Vue/viewErrorConnexion.php'); 
}
else
{
	//require("../Modele/Utilisateur.php");
	
	$email = $_POST["email"];
	$mdp = $_POST["mdp"];
	
	$id = Utilisateur::connect($email, $mdp);

	if($id == null)
	{
		include('../Vue/viewErrorConnexion.php'); 
	}
	else{
		$_SESSION['login'] = $email;
		$admin = Utilisateur::isAdmin($email);
		$_SESSION['admin'] = $admin;
		include('../Vue/viewValidConnexion.php'); 
	}
}

	require("./footer.php");
?>