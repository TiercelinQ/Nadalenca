<?php
include ("./config.php");
include("../menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete
	include("../Vue/viewTest.php");

		
	require("../footer.php");
?>