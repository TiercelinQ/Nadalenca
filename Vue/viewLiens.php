<h1>Liens</h1>
<hr />

<h3>Liens utiles :</h3>
		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li><a href="; 
		echo $tuple['lien'] . ">" .  $tuple['description']. "</a></li>";
	}

		
	?>
	</ul>