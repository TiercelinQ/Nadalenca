<!DOCTYPE html>
<html>
	<head>
		<title>Liens Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />

<script>
function verif(i)	// passage de l'identifiant du lien cliqué
{
// fonction JavaScript de confirmation de suppression d'un lien
var r=confirm("Confirmez vous la suppression ?"); // pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupLiens.php?idL=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
 // sinon rien ne se passe, la demande de suppression est annulée 
}
</script>
</head>




<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from lien"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewLiensAdmin.php");
	}
	else 
	include("../Vue/viewLiens.php");
	
	





include("./footer.php");
?>