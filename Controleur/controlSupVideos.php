<?php
	//On récupère la Class Vidéo
	include ("../Modele/Video.php");

	//Vérification de ce qui a été récupéré dans idV
	if(isset($_GET['idV']))
	{
		//la valeur $idV prend le contenu qui a été récupéré	
		$idV = $_GET['idV'];
		//Vérification si la video existe par son idV
		if(Video::existId($idV))
		{
			//Création d'un constructeur en rapport à la fonction delete
			Video::delete($idV);
			//Redirection vers la page des videos de la session admin
			header("Location:./controlVideosAdmin.php");
		}
	}
	else
	{
		//Redirection vers la page des videos de la session admin
		header("Location:./controlVideosAdmin.php");
	}
?>
