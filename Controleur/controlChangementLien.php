<?php
//On récupère la Class Utilisateur
include ("../Modele/Lien.php");

//Toutes les variables récupèrent les contenus des cases qui leur sont attribués
$id = $_POST['id'];
$lien = addslashes(htmlspecialchars($_POST["lien"]));
$description = addslashes(htmlspecialchars($_POST["description"]));


//Appel de la fonction changementInfo de la classe Utilsateur
$lien = Lien::modifLien($id, $lien, $description);

	header("Location: ./controlLiensAdmin.php");

?>
