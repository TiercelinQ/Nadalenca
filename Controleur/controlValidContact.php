<!DOCTYPE html>
<html>
	<head>
		<title>Message envoyé</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

<?php
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On récupère la Class Message
	include("../Modele/Message.php");

//htmlspecialchars -> Convertit les caractères spéciaux en entités HTML
//Les variables prennent les valeurs qui leur sont attribuées
$idM = null;
$nomM = htmlspecialchars($_POST["nomM"]);
$prenomM = htmlspecialchars($_POST["prenomM"]);
$emailM = htmlspecialchars($_POST["emailM"]);
$sujetM = htmlspecialchars($_POST["sujetM"]);
$messageM = htmlspecialchars($_POST["messageM"]);
//Date prend la valeur de la date actuelle
$dateM = date("d-m-y");

	//Création d'un constructeur Message
	$contact = new Message($idM, $nomM, $prenomM, $emailM, $sujetM, $messageM, $dateM);
	//Ajout du mesage
	$contact->create();

	//On prépare le mail qui sera envoyé à l'admin
	$to='q.tiercelin@gmail.com';
	$sujet=$sujetM;
	$corps= $messageM;
	$headers = $emailM . "\r\n" .
	'Reply-To: prenom.nom@univ-montp2.fr' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	//on envoie un mail à l'administrateur
	mail($to,$sujet,$corps,$headers);

	//On inclut la page de validation de l'envoie d'un message à l'admin
	include('../Vue/viewValidContact.php');
	//On inclut le footer		
	include("./footer.php");
?>


