<?php 
include ("../Modele/Utilisateur.php");
if(isset($_POST['email'])){ //sera vrai si au moins un moins un checkbox a Ã©tÃ© cochÃ©
 
foreach($_POST['email'] as $email) //ici Ã  chaque passage $admin contiendra la valeur de l'attribut value d'une des cases Ã  cocher
	{ 
	Utilisateur::changerAdmin($email);
	}
	
	include("./ControlMembres.php");
}
?>