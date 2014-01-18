<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php
	//On inclut le fichier config pour accéder à la base de données
	require("../config.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");

//Les vaiables ci-dessous prennent les valeurs qui leur sont attribuées
$id=null;
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$mdpc = $_POST["mdpc"];
$mdpn = $_POST["mdpn"];
$adresseP = null;
$codeP = null;
$ville = null;
$numtelF = null;
$numtelM = null;
$admin = null;
$statut = null;
$voix = null;
	
//mot de passe de vérification pour permettre l'inscription.
$mdpNadalenca = 'nadalenca';

//Si le nom est vide
if(empty($nom))
{
	//On inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php'); 
}
//Sinon si le prenom est vide
else if(empty($prenom))
{
	//on inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php'); 
}
//Sinon si l'email est vide
else if(empty($email))
{
	//On inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php'); 
}
//Sinon si le mot de passe est vide
else if(empty($mdp))
{
	//On inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php'); 
}
//Sinon si le mot de passe et le mot de passe de confirmation ne sont pas égaux
else if ($mdp != $mdpc)
{
	//on inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php');  
}
//Sinon si le mot de passe nadalenca est vide ou qu'il ne correspond pas au mot de passe de sécurité nadalenca
else if (empty($mdpn) OR $mdpn != $mdpNadalenca)
{
	//on inclut la page d'erreur d'inscription
	include('../Vue/viewErrorInscription.php'); 
}
else
{
	//Vérification si l'utilisateur n'existe pas déjà avec son email
	if(!utilisateur::Exist($email))
	{	
		//Préparation de l'en-tête du mail de confirmation
		$headers = 'From: q.tiercelin@gmail.com' . "\r\n" .
				   'Reply-To: q.tiercelin@gmail.com' . "\r\n" .
				   'X-Mailer: PHP/' . phpversion();
		//Prépaation du corps du mail de confirmation
		$corp = "Vous vous etes bien inscrits sur le site de l'association Nadalenca.\n
				Pour vous connecter, voici vos identifiants:
				Email : ".$email."
				Mot de passe: ".$mdp."\n
				Merci de votre inscription.\n
				Nadalenca";
		//Envoie du mail de confirmation
		mail($email, 'Validation Inscription Nadalenca', $corp, $headers);

		//Création d'un constructeur utilisateur
		$utilisateur = new utilisateur($id, $nom, $prenom, $email, $mdp, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix);
		//Ajout d'un utilisateur
		$utilisateur->create();
		//On inclut la page de validation d'inscription
		include('../Vue/viewValidInscription.php');  
	}
	else
	{
		//on inclut la page d'erreur d'inscription
		include('../Vue/viewErrorInscription.php');  
	}
}
	//On inclut le footer
	include("./footer.php");
?>
		


