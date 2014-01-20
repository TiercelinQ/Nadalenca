<?php
//On récupère la Class Utilisateur
include ("../Modele/Utilisateur.php");

//Toutes les variables récupèrent les contenus des cases qui leur sont attribués
$email = $_SESSION['login'];
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
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


//Appel de la fonction changementInfo de la classe Utilsateur
$profil = Utilisateur::changementInfo($email, $id,$nom, $prenom, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix, $statut);
//On vérifie que l'ancien mot de passe ne soit pas null, que l'ancien mot de passe correspond à celui du profil en cours et que le nouveau mot de passe contienne la même valeur que le mot de passe de confirmation
if($mdpold != null &&($mdpold == $profil->getMdp() && $mdpnew == $mdpnewconf))
{
	//Appel de la fonction changeMdp de la classe Utilisateur
	$profil = Utilisateur::changeMdp($email, $mdpnew);
	//Redirection vers la page du profil
	header("Location: ./controlProfil.php");
}
else 
{
	//Redirection vers la page du profil
	header("Location: ./controlProfil.php");
}
?>
