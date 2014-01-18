<?php
	//On récupère la Class Image
	include ("../Modele/Image.php");

	//Vérification de ce qui a été récupérer
	if(isset($_GET['idI']))
	{
		//La valeur $idI prend ce qui a été récupéré
		$idI = $_GET['idI'];
		//Vérification si l'image existe en fonction de $idI
		if(Image::existId($idI))
		{
			//Création d'un constructeu en rapport avec la fonction delete
			Image::delete($idI);
			//Redirection vers la page d'ajout d'une image
			header("Location:./controlAddImage.php");
		}
	}
	else
	{
		//Redirection vers la pahe d'ajout d'une image
		header("Location:./controlAddImage.php");
	}
?>
