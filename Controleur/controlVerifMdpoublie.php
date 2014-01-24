<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	</head>


<?php
	//on inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	require("../config.php");
	if(!empty($_POST["email"])){
	//la valeur $email prend le contenu récupéré dans email
	$email = $_POST["email"];
	//Appel de la fonction changeMdpoublie de la classe Utilisateur
	$mdp = Utilisateur::changeMdpoublie($email);

	//Si l'utilisateur existe en appelant la fonction Exist de la classe Utilisateur
	if(Utilisateur::Exist($email))
	{				
			//Préparation du sujet du mail
			$sujet='Votre mot de passe Nadalenca';
			//Préparation du corps du mail
			$corps="Vous avez demandé une réinitialisation de votre mot de passe pour le site Nadalenca, voici vos coordonnées : " .   "\r\n" .
			"Votre email : " . $email .   "\r\n" .
			"Votre mot de passe : " . $mdp . "\r\n" .
			"Ce mot de passe est provisoire, merci de le modifier au plus vite ! " . "\r\n" .
			"A bientôt sur votre site web ! Coordialement.";
			//préparation de l'en-tête du mail
			$headers = 'From: pochon.amaury@gmail.com' . "\r\n" .
			'Reply-To: pochon.amaury@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
			//Envoie du mail
			mail($email,$sujet,$corps,$headers);
			//On inclut la page de validation du mot de passe oublié
			include('../Vue/viewValidMdpoublie.php'); 
	}	
	}
	else
	{
		//on inclut la page d'erreur du mot de passe oublié
		include('../Vue/viewErrorMdpoublie.php'); 
	}
	//on inclut le footer
	include("./footer.php");	
?>	