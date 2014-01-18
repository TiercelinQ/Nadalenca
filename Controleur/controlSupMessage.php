<?php
	//On récupère la Class Message
	include ("../Modele/Message.php");

	//On vérifie ce qui a été récupéré dans idM
	if(isset($_GET['idM']))
	{
		//La valeur $idM prend ce qui a été récupéré
		$idM = $_GET['idM'];
		//On affiche $idM
		echo $idM;
		//On vérifie si le message existe en fonction de idM
		if(Message::exist($idM))
		{
			//Création d'un constructeur en rapport avec la fonction delete
			Message::delete($idM);
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlMessagesrecus.php");
		}
		else
		{
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlMessagesrecus.php");
		}
	}
	else
	{
		//Redirection vers la page des messages reçus de la session admin
		header("Location:./controlMessagesrecus.php");
	}
?>