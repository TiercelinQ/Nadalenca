<?php
include ("../Modele/Concert.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(Concert::existId($id)){
		Concert::delete($id);
		header("Location:./controlAddConcert.php");
	}
	else header("Location:./controlAddConcert.php");
}
else header("Location:./controlAddConcert.php");
?>
