<?php
	//ON récupère la Class Noel
	include ("../Modele/Noel.php");
	
	//Vérification de ce qui a été récupérer dans id
	if(isset($_GET['id']))
	{
		//la valeur $id prend ce qui a été récupéré
		$id = $_GET['id'];
		//Vérification l'existence du concert avec l'appel de la fonction existId de la classe Concert
		if(Noel::existId($id))
		{
			//Appel de la fonction delete de la classe Concert
			Noel::delete($id);
			//Redirection vers la page d'ajout d'un concert
			header("Location:./controlAddNoel.php");
		}
		else 
		{
			//Sinon redirection vers la page d'ajout d'un concert
			header("Location:./controlAddNoel.php");
		}
	}
	else 
	{
		//Sinon redirection vers la pahe d'ajout d'un concert
		header("Location:./controlAddNoel.php");
	}
?>
