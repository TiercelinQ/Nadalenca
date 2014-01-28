<?php
//On récupère la Class Utilisateur
include ("../Modele/Concert.php");

//Toutes les variables récupèrent les contenus des cases qui leur sont attribués
$id = $_POST['id'];
$titreC = addslashes(htmlspecialchars($_POST["titreC"]));
$dateC = htmlspecialchars($_POST["dateC"]);
$heureC = htmlspecialchars($_POST["heureC"]);
$minuteC = htmlspecialchars($_POST["minuteC"]);
$lieuC = addslashes(htmlspecialchars($_POST["lieuC"]));
$adresseC = htmlspecialchars($_POST["adresseC"]);
$villeC = htmlspecialchars($_POST["villeC"]);
$prixC = htmlspecialchars($_POST["prixC"]);

//Appel de la fonction changementInfo de la classe Utilsateur
$concert = Concert::modifConcert($id, $titreC, $dateC, $heureC, $minuteC, $lieuC, $adresseC, $villeC, $prixC);

	header("Location: ./controlAddConcert.php");

?>
