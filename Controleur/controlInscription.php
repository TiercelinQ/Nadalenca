<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />

<script>
function verifMDP() {

mdp1 = document.forminscrip.mdp.value;
mdp2 = document.forminscrip.mdpc.value;
mdpn = document.forminscrip.mdpn.value;
// si différentes :
if ( mdp1 != mdp2 ) {
window.alert('Vos deux mots de passe ne sont pas identiques');
return false;
}

// si identiques
else if (mdpn != "nadalenca"){
window.alert('Le mot de passe Nadalenca est faux');
return false;
}
else{
return true;
}
}
</script> 
</head>
	
<?php 
include("./menu.php");
include("../Vue/viewInscription.php");
include("./footer.php");
?>