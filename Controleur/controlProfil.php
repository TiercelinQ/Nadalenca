<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

<?php 
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("config.php");

	//On vérifie que la session ne soit pas vide ou qu'il y a une session en cours
	if ((!empty($_SESSION['login'])) || (isset($_SESSION['login'])))
	{
		//La valeur $email prend le contenu de ce qui est inscrit dans 'login'
		$email = $_SESSION['login']; 
		//Appel de la fonction getUtilisateurByEmail de la classe Utilisateur
		$profil = Utilisateur::getUtilisateurByEmail($email);
    	//On affiche la vue de validation du profil
    	include('../Vue/viewValidProfil.php');
	}
	else
	{
    	//on inclut la vue d'afficha de la page d'erreur
    	include('../Vue/viewErrorMembre.php');
	}

	//On inclut le footer
	include("./footer.php"); 
?>