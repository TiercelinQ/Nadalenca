<?php
include ("../Modele/Message.php");
if(isset($_GET['idM'])){
	$idM = $_GET['idM'];
	if(Message::existId($idM)){
		Message::delete($idM);
		header("Location:./controlMessagesrecus.php");
	}
	else header("Location:./controlMessagesrecus.php");
}
else header("Location:./controlMessagesrecus.php");
?>
