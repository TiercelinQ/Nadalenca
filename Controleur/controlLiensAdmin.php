<!DOCTYPE html>
<html>
	<head>
		<title>Liens Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>

<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression ?");
if (r==true)
  {
  location.href = './controlSupLiens.php?idL=' + i;
  }
 
}
</script>


<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from lien"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewLiensAdmin.php");
	}
	else 
	include("../Vue/viewLiens.php");
	
	





include("./footer.php");
?>