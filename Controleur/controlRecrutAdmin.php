<!DOCTYPE html>
<html>
	<head>
		<title>Recrutement reçus</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="icon" type="image/png" href="../Images/favicon.png" />
		<script>
			function verif(i)// passage de l'identifiant du recrutement cliqué
			{
			// fonction JavaScript de confirmation de suppression d'un recrutement
				var r=confirm("Confirmez vous la suppression du produit ?");	// pop up de demande avec oui/non
				if (r==true)
  				{
  					location.href = './controlSupRecrutement.php?idR=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
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
	$req="SELECT * from recrutement";
	//Execution de la requête
	$res =mysql_query($req);
	//Contrôle permettant d'atteindre la page si la session en cours est une session administrateur
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'ajout d'une image dans la session administrateur
		include("../Vue/viewRecrutementAdmin.php");
	}
	else
	{ 
		//Sinon on affiche la vue des images d'une session normale
		include("../Vue/viewErrorCoAdmin.php");
	}
	//On inclut le footer
	include("./footer.php");
?>