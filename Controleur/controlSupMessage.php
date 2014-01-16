<?php
include ("../Modele/Message.php");
if(isset($_GET['idM'])){
	$idM = $_GET['idM'];
	echo $idM;
	if(Message::exist($idM)){
		Message::delete($idM);
		header("Location:./controlMessagesrecus.php");
	}
	else header("Location:./controlMessagesrecus.php");
}
else header("Location:./controlMessagesrecus.php");
?>