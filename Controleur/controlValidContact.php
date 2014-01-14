
<!DOCTYPE html>
<html>
	<head>
		<title>Message envoyé</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>

	<?php
include("./menu.php");
include("../Modele/Message.php");

$idM = null;
$nomM = $_POST["nomM"];
$prenomM = $_POST["prenomM"];
$emailM = $_POST["emailM"];
$sujetM = $_POST["sujetM"];
$messageM = $_POST["messageM"];
$dateM = date("d-m-y");


$contact = new Message($idM, $nomM, $prenomM, $emailM, $sujetM, $messageM, $dateM);
//print_r($contact);
$contact->create();

$to='q.tiercelin@gmail.com';
$sujet=$sujetM;
$corps= $messageM;
$headers = $emailM . "\r\n" .
'Reply-To: prenom.nom@univ-montp2.fr' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to,$sujet,$corps,$headers);

include('../Vue/viewValidContact.php');
		
include("./footer.php");
?>


