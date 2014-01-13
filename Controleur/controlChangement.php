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
$adresse = $_POST['adresseP'];
$codeP = $_POST['codeP'];
$ville = $_POST['ville'];
$numtelF = $_POST['numtelF'];
$numtelM = $_POST['numtelM'];
$voix = $_POST['voix'];
$statut = $_POST['statut'];


$profil = Utilisateur::changementInfo($email, $id, $mdp, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix);
require ('../Vue/viewProfil.php'); //redirige vers la vue

?>
