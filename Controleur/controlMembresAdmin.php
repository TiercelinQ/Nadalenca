<?php 
//On recupère le controleur des membres
include("./controlMembres.php");

	if(isset($_POST['email'])) //sera vrai si au moins un moins un checkbox a été coché
	{
		//ici a chaque passage $admin contiendra la valeur de l'attribut value d'une des cases a cocher
		foreach($_POST['email'] as $email) 
		{ 
			//création d'un constructeur utilisateur en rapport avec la fonction changerAdmin
			Utilisateur::changerAdmin($email);
		}
		//Redirection vers le contrôleur de la gestion des membres en session admin
			header("Location: ./controlMembresAdmin.php");
	}
	
	if(isset($_POST['idDelete'])) //sera vrai si au moins un moins un checkbox a été coché
	{
		//ici a chaque passage $admin contiendra la valeur de l'attribut value d'une des cases a cocher
		foreach($_POST['idDelete'] as $idDelete) 
		{ 
			//Création d'un constructeur en rapport avec la fonction delete
			Utilisateur::delete($idDelete);
		}
		//Redirection vers le contrôleur de la gestions des membres en session admin
		header("Location: ./controlMembresAdmin.php");
	}
?>