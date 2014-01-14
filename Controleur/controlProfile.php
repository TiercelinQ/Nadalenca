<?php
include ("./Modele/Utilisateur.php");




if ((!empty($_SESSION['login'])) || (isset($_SESSION['login']))) {
	$email = $_SESSION['login']; 
	$profil = Utilisateur::getUtilisateurByEmail($email);
    require ('./Vue/viewProfil.php'); //redirige vers une vue d'erreur
}
else
{
    require ('./Vue/viewErrorProfil.php'); //redirige vers la vue
}
?>