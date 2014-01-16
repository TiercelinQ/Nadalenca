<?php
include ("../Modele/Lien.php");
if(isset($_GET['idL'])){
	$idL = $_GET['idL'];
	if(Lien::exist($idL)){
		Lien::delete($idL);
		header("Location:./controlLiensAdmin.php");
	}
}
else header("Location:./controlLiensAdmin.php");
?>
