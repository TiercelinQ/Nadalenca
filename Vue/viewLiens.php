Liens utiles :
		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li><a href="; 
		echo $tuple['lien'] . ">" .  $tuple['description']. "</a></li>";
	}

		
	?>
	</ul>