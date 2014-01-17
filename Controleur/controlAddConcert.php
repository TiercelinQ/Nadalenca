<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Concerts Administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression du concert?");
if (r==true)
  {
  location.href = './controlSupConcerts.php?id=' + i;
  }
 
}
</script>

<?php 
include("./menu.php");

	$req="SELECT * from Concert order by dateC ASC "; // requête 
	$restot =mysql_query($req); // envoi de la requete


include("../Vue/viewConcertAdmin.php");
include("../Vue/viewAddConcert.php");
include("./footer.php");
?>