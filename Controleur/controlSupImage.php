<?php
include ("../Modele/Image.php");
if(isset($_GET['idI'])){
	$idI = $_GET['idI'];
	if(Image::existId($idI)){
		Image::delete($idI);
		header("Location:./controlAddImage.php");
	}
}
else  header("Location:./controlAddImage.php");
?>
