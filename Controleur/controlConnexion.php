	<?php

if (!isset($_POST['mdp']) OR !isset($_POST['email']))
{
	header('Location:../Vue/viewErrorConnexion.php'); 
}
else if(empty($_POST['mdp']) OR empty($_POST['email']))
{
	header('Location:../Vue/viewErrorConnexion.php'); 
}
else
{
	require("../Modele/Utilisateur.php");
	
	$email = $_POST["email"];
	$mdp = $_POST["mdp"];
	
	$id = Utilisateur::connect($email, $mdp);

	if($id == null)
	{
		header('Location:../Vue/viewErrorConnexion.php'); 
	}
	else{
		$_SESSION['login'] = $email;
		$admin = Utilisateur::isAdmin($email);
		$_SESSION['admin'] = $admin;
		header('Location:../Vue/viewConnexion.php'); 
	}
}
?>
