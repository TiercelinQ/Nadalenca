<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Images administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
<script>
function verif(i)	// passage de l'identifiant de l'image cliquée
{
// fonction JavaScript de confirmation de suppression d'une image 
var r=confirm("Confirmez vous la suppression de l'image ?");	// pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupImage.php?idI=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
 // sinon rien ne se passe, la demande de suppression est annulée 
}
</script>
	</head>



<?php 
include("./menu.php");

$req="SELECT * from image"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewAddImage.php");
	}
	else
	{ 
		include("../Vue/viewImage.php");
	}
include("./footer.php");
?>