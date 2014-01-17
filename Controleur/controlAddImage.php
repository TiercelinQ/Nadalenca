<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Images administrateur</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression de l'image ?");
if (r==true)
  {
  location.href = './controlSupImage.php?idI=' + i;
  }
 
}
</script>


<?php 
include("./menu.php");


include("../Vue/viewAddImage.php");
include("./footer.php");
?>