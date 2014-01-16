<?php
require("../config.php");
include("./menu.php");
	if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";
	
	if ($_FILES['image']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
	
	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
	//1. strrchr renvoie l'extension avec le point (« . »).
	//2. substr(chaine,1) ignore le premier caractère de chaine.
	//3. strtolower met l'extension en minuscules.
	$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
	if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
	
	
?>