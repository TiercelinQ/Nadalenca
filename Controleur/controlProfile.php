<?php
include ("./Modele/Utilisateur.php");

$email = $_SESSION['login']; 
$profil = Utilisateur::getUtilisateurByEmail($email);


if ($profil == null)
{
    require ('./Vue/viewErrorProfil.php'); //redirige vers une vue d'erreur
}
else
{
    require ('./Vue/viewProfil.php'); //redirige vers la vue
}
?>