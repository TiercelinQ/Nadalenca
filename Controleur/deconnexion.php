<?php
	//création d'une session
	session_start();
	//Détruit toutes les variables d'une session
	session_unset();  
	//Détruit toutes les données de la session en cours
	session_destroy();  
	//Redirection vers la page index
	header('Location: ../index.php');  
	//Termine le script courant
	exit();  
?> 