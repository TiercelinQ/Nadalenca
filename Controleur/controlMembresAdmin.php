<?php 
//On recupère le controleur des membres
include("./controlMembres.php");

	if(isset($_POST['email'])) //sera vrai si au moins un moins un checkbox a été coché
	{
		//ici a chaque passage $admin contiendra la valeur de l'attribut value d'une des cases a cocher
		foreach($_POST['email'] as $email) 
		{ 
			//Appel de la fonctione changerAdmin de la classe Utilisateur
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
			//Appel de la fonction delete de la classe Utilisateur
			Utilisateur::delete($idDelete);
		}
		//Redirection vers le contrôleur de la gestions des membres en session admin
		header("Location: ./controlMembresAdmin.php");
	}
	
	if(isset($_POST['email'])) //sera vrai si au moins un statut a été changé
	{
		//ici a chaque passage $admin contiendra la valeur de l'attribut value d'une des cases a cocher
		foreach($_POST['email'] as $email) 
		{ 
			//Appel de la fonction delete de la classe Utilisateur
			Utilisateur::changerStatut($email);
		}
		//Redirection vers le contrôleur de la gestions des membres en session admin
		header("Location: ./controlMembresAdmin.php");
	}
	
	
	
?>