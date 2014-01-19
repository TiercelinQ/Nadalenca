<?php
	//On récupère la Class Vidéo
	include ("../Modele/Video.php");

	//Vérification de ce qui a été récupéré dans idV
	if(isset($_GET['idV']))
	{
		//la valeur $idV prend le contenu qui a été récupéré	
		$idV = $_GET['idV'];
		//Vérification si la video existe par appel de la fonction existId de la classe Video
		if(Video::existId($idV))
		{
			//Appel de la fonction delete de la classe Video
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
