<?php

require("../Modele/Message.php");

$idM = null;
$nomM = $_POST["nomM"];
$prenomM = $_POST["prenomM"];
$emailM = $_POST["emailM"];
$sujetM = $_POST["sujetM"];
$messageM = $_POST["messageM"];
$dateM = date("d-m-Y");


$message = new Message($idM, $nomM, $prenomM, $emailM, $sujetM, $messageM, $dateM);
$message->create();

$to='q.tiercelin@gmail.com';
$sujet=$sujetM;
$corps= $messageM;
$headers = $emailM . "\r\n" .
'Reply-To: prenom.nom@univ-montp2.fr' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to,$sujet,$corps,$headers);

require ('../Vue/viewContact.php');

?>


