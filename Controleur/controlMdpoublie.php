<?php

	require("../config.php");
	require("../Modele/Utilisateur.php");

	$email = $_POST["email"];
	$mdp = Utilisateur::changeMdpoublie($email);

	if(Utilisateur::Exist($email))
	{				
			$sujet='Votre mot de passe Nadalenca';
			
			$corps="Vous avez demandé une réinitialisation de votre mot de passe pour le site Nadalenca, voici vos coordonnées : " .   "\r\n" .
			"Votre email : " . $email .   "\r\n" .
			"Votre mot de passe : " . $mdp . "\r\n" .
			"Ce mot de passe est provisoire, merci de le modifier au plus vite ! " . "\r\n" .
			"A bientôt sur votre site web ! Coordialement.";

			$headers = 'From: pochon.amaury@gmail.com' . "\r\n" .
			'Reply-To: pochon.amaury@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
			mail($email,$sujet,$corps,$headers);
				
			header('Location:../Vue/viewMdpoublie.php'); 
	}	
	
	else
	{
		header('Location:../Vue/viewErrorMdpoublie.php'); 
	}
	
	
	
	
	
?>	