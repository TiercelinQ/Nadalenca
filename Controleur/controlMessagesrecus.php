<!DOCTYPE html>
<html>
	<head>
		<title>Messages reçus</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />

<script>
function verif(i)// passage de l'identifiant du message cliqué
{
// fonction JavaScript de confirmation de suppression d'un message reçu
var r=confirm("Confirmez vous la suppression du produit ?");	// pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupMessagerecu.php?idM=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
  // sinon rien ne se passe, la demande de suppression est annulée 
}

</script>
</head>



<?php
	include("./menu.php");
	include("./config.php");

	$req="SELECT * from message order by dateM ASC "; // requête 
	$res =mysql_query($req); // envoi de la requete
	
		
	include("../Vue/viewMessagesrecus2.php");
	include("./footer.php");
?>