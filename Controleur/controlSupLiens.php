<?php
	//On récupère la Class Lien
	include ("../Modele/Lien.php");
	
	//Vérification de ce qui a été récupérer dans idL
	if(isset($_GET['idL']))
	{
		//la valeur $idL prend le contenu de ce qui a été récupéré
		$idL = $_GET['idL'];
		//Vérification si le lien existe en fonction de îdL
		if(Lien::exist($idL))
		{
			//Création d'une constructeur en rapport avec la fonction delete
			Lien::delete($idL);
			//Redirection vers la page de gestion des liens
			header("Location:./controlLiensAdmin.php");
		}
	}
	else
	{
		//Redirection vers la page de gestion des liens
		header("Location:./controlLiensAdmin.php");
	}
?>
