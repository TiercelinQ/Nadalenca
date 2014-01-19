<?php
	//ON récupère la Class Concert
	include ("../Modele/Concert.php");
	
	//Vérification de ce qui a été récupérer dans id
	if(isset($_GET['id']))
	{
		//la valeur $id prend ce qui a été récupéré
		$id = $_GET['id'];
		//Vérification l'existence du concert avec l'appel de la fonction existId de la classe Concert
		if(Concert::existId($id))
		{
			//Appel de la fonction delete de la classe Concert
			Concert::delete($id);
			//Redirection vers la page d'ajout d'un concert
			header("Location:./controlAddConcert.php");
		}
		else 
		{
			//Sinon redirection vers la page d'ajout d'un concert
			header("Location:./controlAddConcert.php");
		}
	}
	else 
	{
		//Sinon redirection vers la pahe d'ajout d'un concert
		header("Location:./controlAddConcert.php");
	}
?>
