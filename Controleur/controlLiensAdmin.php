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
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//ON inclut le menu en fonction de la session en cours
include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table lien
	$req="SELECT * from lien";
	//Execution de la requête
	$res =mysql_query($req);

	//Vérification si une session est en cours et que cette session est administrateur
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'affichage de la gestion des liens
		include("../Vue/viewLiensAdmin.php");
	}
	else
	{
		//On inclut la vue d'affichage des liens d'une session normale
		include("../Vue/viewLiens.php");
	}
	
	//On inclut le footer
	include("./footer.php");
?>