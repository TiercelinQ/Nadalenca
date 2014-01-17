<!DOCTYPE html>
<html>
	<head>
		<title>Production Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
<script>
function verif(i) // passage de l'identifiant du produit cliqué
{
// fonction JavaScript de confirmation de suppression d'un produit
var r=confirm("Confirmez vous la suppression du produit ?");	// pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupProduit.php?idP=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
 // sinon rien ne se passe, la demande de suppression est annulée 
}
</script>
</head>


<?php
include ("./config.php");
include("./menu.php"); 

	$req="SELECT * from Production"; // requete
	$res =mysql_query($req); // envoi de la requete

	
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewProductionAdmin.php");
	}
	else 
	include("../Vue/viewProduction.php");
	
	





include("./footer.php");
?>