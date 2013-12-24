<?php
include ("./Modele/Utilisateur.php");

$profil = Utilisateur::getUtilisateur();


if ($profil == null)
{
    require ('./Vue/viewErrorQuisommesnous.php'); //redirige vers une vue d'erreur
}
else
{
    require ('./Vue/viewQuisommesNous.php'); //redirige vers la vue
}
?>