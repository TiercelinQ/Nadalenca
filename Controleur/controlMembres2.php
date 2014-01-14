<?php
include ("./Modele/Utilisateur.php");

$profil = Utilisateur::getUtilisateur();


if ($profil == null)
{
    require ('./Vue/viewErrorMembres.php'); //redirige vers une vue d'erreur
}
else
{
    require ('./Vue/viewMembres.php'); //redirige vers la vue
}
?>