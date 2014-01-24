<!--On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Images administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
			<link rel="icon" type="image/png" href="../Images/favicon.png" />
	
	<!-- Script permettant la suppresion d'une image via une petite fenetre pop-up -->
	<script>
		function verif(i)	// passage de l'identifiant de l'image cliquée
		{
			// fonction JavaScript de confirmation de suppression d'une image 
			var r=confirm("Confirmez vous la suppression de l'image ?");	// pop up de demande avec oui/non
			if (r==true)
  			{
  				location.href = './controlSupImage.php?idI=' + i;
  				// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  			}
 			// sinon rien ne se passe, la demande de suppression est annulée 
		}
	</script>
	</head>

<?php 
//On inclut le menu en fonction de la session en cours
include("./menu.php");

//Requête permettant l'afficha de toutes les images
$req="SELECT * from image";
//ON exécute la requête
$res =mysql_query($req);

	//Contrôle permettant d'atteindre la page si la session en cours est une session administrateur
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On inclut la vue d'ajout d'une image dans la session administrateur
		include("../Vue/viewAddImage.php");
	}
	else
	{ 
		//Sinon on affiche la vue des images d'une session normale
		include("../Vue/viewImage.php");
	}
//On inclut le footer	
include("./footer.php");
?>