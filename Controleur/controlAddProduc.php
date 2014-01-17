<?php

require("../config.php");
require("../Modele/Production.php");
include("./menu.php");

		$dossier = '../Images/';
	//$fichier = basename($_FILES['image']['name']);
	$taille_maxi = 1000000;
	$taille = filesize($_FILES['image']['tmp_name']);
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['image']['name'], '.'); 
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
		 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
	}
	if($taille>$taille_maxi)
	{
		 $erreur = 'Le fichier est trop gros...';
	}
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
		 //recupere l'extension du fichier
		 $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
		 //On formate le nom du fichier ici...
		 $nom = md5(uniqid(rand(), true));
		 if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $nom .'.'.$extension_upload)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		 {
			  echo 'Upload effectué avec succès !';
		 }
		 else //Sinon (la fonction renvoie FALSE).
		 {
			  echo 'Echec de l\'upload !';
		 }
	}
	else
	{
		 echo $erreur;
	} 
	
	
	
	$idP = null;
	$nomP = $_POST["nomP"];
	$descriptionP = $_POST["descriptionP"];
	$prixP = $_POST["prixP"];
	$imageP = $nom .'.'.$extension_upload
	$production = new production($idP, $nomP, $descriptionP, $prixP, $imageP);
	$production->create();



	include("./footer.php");

	header('Location: ./controlProductionAdmin.php');

?>