<!DOCTYPE html>
<html>
	<head>
		<title>Messages reçus</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<script>
function verif(i)
{
var x;
var r=confirm("Confirmez vous la suppression du produit ?");
if (r==true)
  {
  location.href = './controlSupMessagerecu.php?idM=' + i;
  }
}
</script>

<?php
	include("./menu.php");
	include("./config.php");

	$req="SELECT * from message order by dateM ASC "; // requête 
	$res =mysql_query($req); // envoi de la requete
	
		
	include("../Vue/viewMessagesrecus2.php");
	include("./footer.php");
?>