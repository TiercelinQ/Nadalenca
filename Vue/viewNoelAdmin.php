<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li> $tuple[lieuN]" ." (" .  $tuple['dateDebN']."-" .$tuple['dateFinN'].")".
		"<button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Concerts'/> </button>"
		."</li>";
	}

		
	?>
</ul>