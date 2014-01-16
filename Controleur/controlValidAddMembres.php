<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	<?php

require("../config.php");
//require("../Modele/Utilisateur.php");
include("./menu.php");


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
	

if(empty($nom))
{
	include('../Vue/viewErreurAddMembres.php'); 
}
else if(empty($prenom))
{
	include('../Vue/viewErreurAddMembres.php'); 
}
else if(empty($email))
{
	include('../Vue/viewErreurAddMembres.php'); 
}
else if(empty($mdp))
{
	include('../Vue/viewErreurAddMembres.php');  
}
else if ($mdp != $mdpc)
{
	include('../Vue/viewErreurAddMembres.php');   
}

else
{
	if(!utilisateur::Exist($email))
	{	

		/*$headers = 'From: q.tiercelin@gmail.com' . "\r\n" .
				   'Reply-To: q.tiercelin@gmail.com' . "\r\n" .
				   'X-Mailer: PHP/' . phpversion();
					   
		$corp = "Vous vous etes bien inscrits sur le site de l'association Nadalenca.\n
				Pour vous connecter, voici vos identifiants:
				Email : ".$email."
				Mot de passe: ".$mdp."\n
				Merci de votre inscription.\n
				Nadalenca";
						   
		mail($email, 'Validation Inscription Nadalenca', $corp, $headers);*/
		
		$utilisateur = new utilisateur($id, $nom, $prenom, $email, $mdp, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix);
		$utilisateur->create();

		include('../Vue/viewValidInscription.php');  
	}
	else
	{
	

		include('../Vue/viewErreurAddMembres.php');   
	}
}

include("./footer.php");
?>
		
