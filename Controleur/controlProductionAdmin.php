<!DOCTYPE html>
<html>
	<head>
		<title>Production Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
		<script>
			function verif(i) // passage de l'identifiant du produit cliqué
			{
			// fonction JavaScript de confirmation de suppression d'un produit
				var r=confirm("Confirmez vous la suppression du produit ?");// pop up de demande avec oui/non
				if (r==true)
  				{
  					location.href = './controlSupProduit.php?idP=' + i;	
  					// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  				}
 				// sinon rien ne se passe, la demande de suppression est annulée 
			}
		</script>
</head>


<?php
	//On inclut le fichier config pour accéder à la base de données
	include ("./config.php");
	//ON inclut le menu en fonction de la session en cours
	include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table production
	$req="SELECT * from production";
	//Execution de la requête
	$res =mysql_query($req);

	//On vérifie qu'il y a une session en cours et qu'elle soit bien admin
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'affichage de la gestion des productions
		include("../Vue/viewProductionAdmin.php");
	}
	else
	{ 
		//Sinon, on affiche la vue des productions d'une session normale
		include("../Vue/viewProduction.php");
	}

	//On inclut le footer
	include("./footer.php");
?>