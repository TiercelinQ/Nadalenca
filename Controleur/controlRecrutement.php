<!-- On inclut le fichier config pour accéder à la base de données-->
<?php include("./config.php");?>
<!DOCTYPE html>
<html>
   <head>
       <title>Recrutement</title>
           <meta charset="utf-8" />
           <link rel="stylesheet" href="../style.css" />
           <link rel="icon" type="image/png" href="../Images/favicon.png" />
   </head>
   
<?php 
  //On inclut le fichier config pour accéder à la base de données
  include("config.php")
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut la vue d'affichahe pour contacter l'administrateur 
	include("../vue/viewRecrutement.php");
    //On inclut le footer
	include("./footer.php");

?>     