<h1>Videos</h1>
<hr />

		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li>" . $tuple['titreV'] . $tuple['descriptionV']. "</li>";
	}

		
	?>
	</ul>