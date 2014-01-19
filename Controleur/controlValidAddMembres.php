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

//Les variables ci-dessous prennent null ou ce qu'il y a été inscrit
$id=null;
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$mdpc = $_POST["mdpc"];
$adresseP = null;
$codeP = null;
$ville = null;
$numtelF = null;
$numtelM = null;
$admin = null;
$statut = null;
$voix = null;
	
//Vérification que le nom ne soit pas null
if(empty($nom))
{
	//On inclut la page d'erreur d'ajout d'un membre
	include('../Vue/viewErreurAddMembres.php'); 
}
//Sinon on vérifie si le prénom n'est pas null
else if(empty($prenom))
{
	//on inclut la vue d'erreur d'ajout d'un membre
	include('../Vue/viewErreurAddMembres.php'); 
}
//Sinon vérification si l'email n'est pas null
else if(empty($email))
{
	//On inclut la vue d'erreur d'ajout d'un membre
	include('../Vue/viewErreurAddMembres.php'); 
}
//Sinon vérification que le mot de passe ne soit pas null
else if(empty($mdp))
{
	//On inclut la vue d'erreur d'ajout d'un membre
	include('../Vue/viewErreurAddMembres.php');  
}
//Sinon on vérifie que $mdp et $mdpc soient égaux
else if ($mdp != $mdpc)
{
	//on inclut la vue d'erreur d'ajout d'un membre
	include('../Vue/viewErreurAddMembres.php');   
}
else
{
	//On vérifie que l'utilisateur n'existe pas déjà avec la fonction Exist de la classe Utilisateur
	if(!utilisateur::Exist($email))
	{	

		$headers = 'From: q.tiercelin@gmail.com' . "\r\n" .
				   'Reply-To: q.tiercelin@gmail.com' . "\r\n" .
				   'X-Mailer: PHP/' . phpversion();
					   
		$corp = "Vous vous etes bien inscrits sur le site de l'association Nadalenca.\n
				Pour vous connecter, voici vos identifiants:
				Email : ".$email."
				Mot de passe: ".$mdp."\n
				Merci de votre inscription.\n
				Nadalenca";
		//On envoie un mail avec les identifiants au nouvel utilisateur						   
		mail($email, 'Validation Inscription Nadalenca', $corp, $headers);
		
		//Création d'un nouveau Utilisateur
		$utilisateur = new utilisateur($id, $nom, $prenom, $email, $mdp, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix);
		//Ajout d'un nouveau utilisateur
		$utilisateur->create();

		//On inclut la page de validation d'ajout d'un membre
		include('../Vue/viewValidAddMembres.php');  
	}
	else
	{
		//on inclut la page d'erreur d'ajout d'un membre
		include('../Vue/viewErreurAddMembres.php');   
	}
}
	//On inclut le footer
	include("./footer.php");
?>
		
