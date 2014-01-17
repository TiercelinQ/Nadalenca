<!DOCTYPE html>
<html>
	<head>
		<title>Production Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression du produit ?");
if (r==true)
  {
  location.href = './controlSupProduit.php?idP=' + i;
  }
 
}
</script>
</head>


<?php
include ("./config.php");
include("./menu.php"); 

	$req="SELECT * from Production"; // requete
	$res =mysql_query($req); // envoi de la requete

	
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewProductionAdmin.php");
	}
	else 
	include("../Vue/viewProduction.php");
	
	





include("./footer.php");
?>