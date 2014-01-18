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
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut le fichier config pour accéder à la base de données
	include("./config.php");

	//Requête permettant d'afficher l'ensemble des tuples de la table message
	$req="SELECT * from message order by dateM ASC ";
	//Execution de la requête
	$res =mysql_query($req);

	//On inclut la vue d'affichage des messages reçus en session admins
	include("../Vue/viewMessagesrecus2.php");
	//On inclut le footer
	include("./footer.php");
?>