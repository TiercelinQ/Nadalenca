<!DOCTYPE html>
<html>
	<head>
		
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	require("../config.php");

//Vérification si le mot de passe ou le email entrés sont bons
if (!isset($_POST['mdp']) OR !isset($_POST['email']))
{
	//on inclut la page d'erreur de connexion
	include('../Vue/viewErrorConnexion.php'); 
}
//Sinon on vérifie si le mot de passe OU l'email ne sont pas vides
else if(empty($_POST['mdp']) OR empty($_POST['email']))
{
	//On inclut la page d'erreur de connexion
	include('../Vue/viewErrorConnexion.php'); 
}
else
{
	//La valeur $email prend le contenu récupéré	
	$email = $_POST["email"];
	//la valeur $mdp prend le contneu récupéré
	$mdp = $_POST["mdp"];
	//Appel de la fonction connect de la classe Utilisateur
	$id = Utilisateur::connect($email, $mdp);

	//Si l'$id est null
	if($id == null)
	{
		//on inclut la page d'erreur de connexion
		include('../Vue/viewErrorConnexion.php'); 
	}
	else
	{
		//Création de la session login avec $email
		$_SESSION['login'] = $email;
		//On vérifie si c'est un admin avec l'appel de la fonction isAdmin de la classe Utilisateur
		$admin = Utilisateur::isAdmin($email);
		//Création de la session Admin
		$_SESSION['admin'] = $admin;
		//On inclut la page de validation de connexion
		include('../Vue/viewValidConnexion.php'); 
	}
}
	//On inclut le footer
	require("./footer.php");
?>