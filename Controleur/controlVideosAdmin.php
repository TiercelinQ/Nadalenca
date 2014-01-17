<!DOCTYPE html>
<html>
	<head>
		<title>Vidéos Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
<script>
function verif(i)	// passage de l'identifiant de la video cliquée
{
// fonction JavaScript de confirmation de suppression d'une video
var r=confirm("Confirmez vous la suppression de la vidéo?");	// pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupVideos.php?idV=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
 // sinon rien ne se passe, la demande de suppression est annulée 
}
</script>
</head>




<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from video"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewVideoAdmin.php");
	}
	else 
	include("../Vue/viewVideo.php");
	
	





include("./footer.php");
?>