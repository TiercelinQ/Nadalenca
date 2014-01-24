<!DOCTYPE html>
<html>
     <head>
          <title>Produit ajouté</title>
               <meta charset="utf-8" />
               <link rel="stylesheet" href="../style.css" />
               <link rel="icon" type="image/png" href="../Images/favicon.png" />
     </head>


<?php
//On inclut le fichier config pour accéder à la base de données
require("../config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php");
//On récupère la Class Image
include("../Modele/Image.php");
//On récupère la Class Prduction
include("../Modele/Production.php");

$dossier = '../Images/';
//$fichier = basename($_FILES['image']['name']);
$taille_maxi = 200000000;
$taille = filesize($_FILES['image']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['image']['name'], '.'); 
//Début des vérifications de sécurité.
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc.';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros.';
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
     //La variable $idP prend la valeur null car son attribut dans la base de donnée s'incrémente automatiquement
	$idP = null;
     //La valeur $nomP prend le contenu inscrit dans la case nomP
	$nomP = $_POST["nomP"];
     //La valeur $descriptionP prend le contenu inscrit dans la case descriptionP
	$descriptionP = $_POST["descriptionP"];
     //La valeur $prixP prend le contenu inscrit dans la case prixP
	$prixP = $_POST["prixP"];
     //La valeur $imageP prend la concaténation du nom ainsi que de son extension
	$imageP = $nom .'.'.$extension_upload;
     //Création d'un nouveau produit
	$production = new production($idP, $nomP, $descriptionP, $prixP, $imageP);
     //Ajout d'une production dans la base de données
	$production->create();

     //On affiche la vue de validationd d'ajout d'une production
	include("../Vue/viewValidAddProd.php");
     //On inclut le footer
	include("./footer.php");
?>