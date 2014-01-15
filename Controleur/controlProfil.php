
<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>



<?php 
include("./menu.php");
include("config.php");
include("../Modele/Utilisateur.php");



if ((!empty($_SESSION['login'])) || (isset($_SESSION['login']))) {
	$email = $_SESSION['login']; 
	$profil = Utilisateur::getUtilisateurByEmail($email);
    include('../Vue/viewValidProfil.php'); //redirige vers une vue d'erreur
}
else
{
    include('../Vue/viewErrorProfil.php'); //redirige vers la vue
}
include("./footer.php"); 
?>