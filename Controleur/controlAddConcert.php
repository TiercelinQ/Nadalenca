<!DOCTYPE html>
<html>
	<head>
		<title>Concerts Administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	
	<!-- Script permettant la suppresion d'un concert via une petite fenetre pop-up -->
	<script>
		function verif(i)	// passage de l'identifiant du concert cliqué
		{
			// fonction JavaScript de confirmation de suppression d'un concert
			var r=confirm("Confirmez vous la suppression du concert?"); // pop up de demande avec oui/non
			if (r==true)
  			{
  			location.href = './controlSupConcerts.php?id=' + i;	
  			// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  			}
  		// sinon rien ne se passe, la demande de suppression est annulée 
		}
	</script>
</head>


<?php 
//On inclus le fichier config pour accéder à la base de données
include("config.php");
//On inclut le menu dans le controleur d'ajout d'un noel occitan
include("./menu.php");

	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{

	//Requête SQL permettant d'afficher les noels occitan du plus vieux au plus récents
	$req="SELECT * from concert order by dateC ASC ";
	//On exécute la requête
	$restot =mysql_query($req);


		//On inclut la vue de la gestion des noels occitan en session administrateur
	include("../Vue/viewConcertAdmin.php");
	//On inclut la vue de l'ajout d'un noel occitan en session administrateur
	include("../Vue/viewAddConcert.php");
	}
	else
	{ 		
	//Requête permettant d'afficher les noels occitans de la dateC jusqu'à la date de maintenant
	$req="SELECT * from concert where dateC>now() order by dateC ASC ";
	//On execute la requête
	$res1 =mysql_query($req);
	
	//Requête permettant d'afficher les noel occitan de la date de maintenant jusqu'à la dateC
	$req="SELECT * from concert where dateC<now() order by dateC ASC ";
	//On execute la requête
	$res2 =mysql_query($req);
	//Sinon, on affiche la vue des productions d'une session normale
	include("../Vue/viewConcert.php");
	}

//On inclut le footer
include("./footer.php");
?>