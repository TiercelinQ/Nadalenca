<?php
include ("../Modele/Video.php");
if(isset($_GET['idV'])){
	$idV = $_GET['idV'];
	if(Video::existId($idV)){
		Video::delete($idV);
		header("Location:./controlVideosAdmin.php");
	}
}
else  header("Location:./controlVideosAdmin.php");
?>
