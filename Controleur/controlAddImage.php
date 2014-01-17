<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Images administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression de l'image ?");
if (r==true)
  {
  location.href = './controlSupImage.php?idI=' + i;
  }
 
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