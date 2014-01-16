<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Plan du site</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php 
include("menu.php");

	if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		include("../Vue/viewPlandusiteA.php");
	}
	else if(isset($_SESSION['login']))
	{
		include("../Vue/viewPlandusiteM.php");	
	}
	else
	{
		include("../Vue/viewPlandusiteV.php");
	}

include("footer.php"); 
?>