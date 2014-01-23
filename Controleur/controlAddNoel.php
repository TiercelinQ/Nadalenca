<!--On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Noel Occitan</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	
	<!-- Script permettant la suppresion d'un noel Occitant via une petite fenetre pop-up -->
	<script>
		function verif(i)	// passage de l'identifiant du noel Occitan cliqué
		{
			// fonction JavaScript de confirmation de suppression d'un noel occitant
			var r=confirm("Confirmez vous la suppression du Noel Occitan?"); // pop up de demande avec oui/non
			if (r==true)
  			{
  			location.href = './controlSupNoel.php?id=' + i;	
  			// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  			}
  		// sinon rien ne se passe, la demande de suppression est annulée 
		}
	</script>
</head>

<?php 
//On inclut le menu dans le controleur d'ajout d'un noel occitan
include("./menu.php");

	//Requête SQL permettant d'afficher les concerts du plus vieux au plus récents
	$req="SELECT * from noel order by dateDebN ASC ";
	//On exécute la requête
	$res =mysql_query($req);

	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{

	


		//On inclut la vue de la gestion des concerts en session administrateur
	include("../Vue/viewNoelAdmin.php");
	//On inclut la vue de l'ajout d'un concert en session administrateur
	include("../Vue/viewAddNoel.php");
	}
	else
	{ 		
	//Sinon, on affiche la vue des productions d'une session normale
	include("../Vue/viewNoel.php");
	}

//On inclut le footer
include("./footer.php");
?>