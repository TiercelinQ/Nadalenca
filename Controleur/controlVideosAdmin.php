<!DOCTYPE html>
<html>
	<head>
		<title>Vidéos Admin</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression de la vidéo?");
if (r==true)
  {
  location.href = './controlSupVideos.php?idV=' + i;
  }
 
}
</script>
</head>




<?php
include ("./config.php");
include("./menu.php"); 

$req="SELECT * from video"; // requete
$res =mysql_query($req); // envoi de la requete


	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
	include("../Vue/viewVideoAdmin.php");
	}
	else 
	include("../Vue/viewVideo.php");
	
	





include("./footer.php");
?>