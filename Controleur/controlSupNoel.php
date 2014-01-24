<?php
	//ON récupère la Class Noel
	include ("../Modele/Noel.php");
	
	//Vérification de ce qui a été récupérer dans id
	if(isset($_GET['idN']))
	{
		//la valeur $id prend ce qui a été récupéré
		$idN = $_GET['idN'];
		//Vérification l'existence d'un noel occitan avec l'appel de la fonction existId de la classe noel
		if(Noel::existId($idN))
		{
			//Appel de la fonction delete de la classe noel
			Noel::delete($idN);
			//Redirection vers la page d'ajout d'un noel occitan
			header("Location:./controlAddNoel.php");
		}
		else 
		{
			//Sinon redirection vers la page d'ajout d'un noel occitan
			header("Location:./controlAddNoel.php");
		}
	}
	else 
	{
		//Sinon redirection vers la pahe d'ajout d'un noel occitan
		header("Location:./controlAddNoel.php");
	}
?>
