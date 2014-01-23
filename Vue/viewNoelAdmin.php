<h2>Liste des Concerts Noël Occitan</h2>
<hr />

<ul>
					
	<?php
	include("../Modele/Noel.php");
	while ($tuple = mysql_fetch_array($res))
	{ 
		$i = $tuple['idN'];
		echo "<br /><li> $tuple[lieuN]" ." (" .  $tuple['dateDebN']."-" .$tuple['dateFinN'].")".
		"<button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Concerts'/> </button>"
		."</li>";
	}

		
	?>
</ul>