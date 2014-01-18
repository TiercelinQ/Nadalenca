<!--On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Concerts Administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	
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
//On inclut le menu dans le controleur d'ajout d'un concert
include("./menu.php");

	//Requête SQL permettant d'afficher les concerts du plus vieux au plus récents
	$req="SELECT * from Concert order by dateC ASC ";
	//On exécute la requête
	$restot =mysql_query($req);

//On inclut la vue de la gestion des concerts en session administrateur
include("../Vue/viewConcertAdmin.php");
//On inclut la vue de l'ajout d'un concert en session administrateur
include("../Vue/viewAddConcert.php");
//On inclut le footer
include("./footer.php");
?>