<?php
include ("./config.php");
include("./menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete
	include("../Vue/viewMembre.php");

		
	require("./footer.php");
?>