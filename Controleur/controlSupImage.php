<?php
	//On récupère la Class Image
	include ("../Modele/Image.php");

	//Vérification de ce qui a été récupérer
	if(isset($_GET['idI']))
	{
		//La valeur $idI prend ce qui a été récupéré
		$idI = $_GET['idI'];
		//Vérification si l'image existe avec l'appel de la fonction existId de la classe Image
		if(Image::existId($idI))
		{
			//Appel de la fonction delete de la classe Image
			$nom = Image::getNomById($idI);
			$chemin = "../Images/".$nom;
			unlink($chemin);
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
