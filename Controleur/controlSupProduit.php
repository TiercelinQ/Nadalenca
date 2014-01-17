<?php
include ("../Modele/Production.php");
if(isset($_GET['idP'])){
	$idP = $_GET['idP'];
	if(Production::existId($idP)){
		Production::delete($idP);
		header("Location:./controlProductionAdmin.php");
	}
}
else  header("Location:./controlProductionAdmin.php");
?>
