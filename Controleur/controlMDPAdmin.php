<!DOCTYPE html>
<html>
	<head>
		<title>Gestion du MDP d'inscription</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
	<script>
		function verif()	// passage de l'identifiant du mdp
		{
			// fonction JavaScript de confirmation de modification de mdpI
			var r=confirm("Confirmez vous la modification du mot de passe ?");	// pop up de demande avec oui/non
			return r;
 			// sinon rien ne se passe, la demande de suppression est annulée 
		}
	</script>
</head>

<?php
	//On inclut le fichier config pour accéder à la base de données
	include ("./config.php");
	//On inclut le menu en fonction de la session en cours
	include("./menu.php"); 

	//Requête permettant d'afficher l'ensemble des tuples de la table mdp
	$req="SELECT * from mdp";
	//Execution de la requête
	$res =mysql_query($req);

	//Vérification s'il y a une session en cours et qu'elle soit une session admin
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la page de gestion des vidéos
		include("../Vue/viewMdpAdmin.php");
	}
	else
	{ 
		//On inclut la page des vidéos pour une session normale
		include("../Vue/viewErrorCoAdmin.php");
	}
	
	//On inclut le footer
	include("./footer.php");
?>