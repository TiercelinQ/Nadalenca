<!DOCTYPE html>
<html>
	<head>
		<title>Gestion des vidéos</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
	<script>
		function verif(i)	// passage de l'identifiant de la video cliquée
		{
			// fonction JavaScript de confirmation de suppression d'une video
			var r=confirm("Confirmez vous la suppression de la vidéo?");	// pop up de demande avec oui/non
			if (r==true)
  			{
  				location.href = './controlSupVideos.php?idV=' + i;	
  				// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  			}
 			// sinon rien ne se passe, la demande de suppression est annulée 
		}
	</script>
</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	include ("./config.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table video
	$req="SELECT * from video";
	//Execution de la requête
	$res =mysql_query($req);

	//Vérification s'il y a une session en cours et qu'elle soit une session admin
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la page de gestion des vidéos
		include("../Vue/viewVideoAdmin.php");
	}
	else
	{ 
		//On inclut la page des vidéos pour une session normale
		include("../Vue/viewVideo.php");
	}
	
	//On inclut le footer
	include("./footer.php");
?>