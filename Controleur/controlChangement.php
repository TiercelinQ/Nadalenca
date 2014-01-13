<?php
include ("../Modele/Utilisateur.php");

$email = $_SESSION['login'];
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$admin = $_POST['admin'];
$mdpold = $_POST['mdpold'];
$mdpnew = $_POST['mdpnew'];
$mdpnewconf = $_POST['mdpnewconf'];
$adresseP = $_POST['adresseP'];
$codeP = $_POST['codeP'];
$ville = $_POST['ville'];
$numtelF = $_POST['numtelF'];
$numtelM = $_POST['numtelM'];
$voix = $_POST['voix'];
$statut = $_POST['statut'];


$profil = Utilisateur::changementInfo($email, $id, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix);

if($mdpold != null &&($mdpold == $profil->getMdp() && $mdpnew == $mdpnewconf))
{
	$profil = Utilisateur::changeMdp($id, $mdpnew);
	require ('../Vue/viewProfil.php'); //redirige vers la vue
}
else 
{
	require ('../Vue/viewProfil.php');//redirige vers la vue
}
?>
