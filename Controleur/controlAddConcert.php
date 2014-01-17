<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Concerts Administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	<script>
function verif(i)	// passage de l'identifiant du concert cliqué
{
// fonction JavaScript de confirmation de suppression d'un concert
var r=confirm("Confirmez vous la suppression du concert?"); // pop up de demande avec oui/non
if (r==true)
  {
  location.href = './controlSupConcerts.php?id=' + i;	// si la personne valide, redirection vers le controleur avec passage en GET de l'identifiant
  }
  // sinon rien ne se passe, la demande de suppression est annulée 
}
</script>
</head>


<?php 
include("./menu.php");

	$req="SELECT * from Concert order by dateC ASC "; // requête 
	$restot =mysql_query($req); // envoi de la requete


include("../Vue/viewConcertAdmin.php");
include("../Vue/viewAddConcert.php");
include("./footer.php");
?>