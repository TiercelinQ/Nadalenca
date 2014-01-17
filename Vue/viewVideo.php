<h1>Videos</h1>
<hr />

		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li>TITRE : ". $tuple['titreV']." DESCRIPTION : " .$tuple['descriptionV']. "<br />
<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/".$tuple['lienV']."\" frameborder=\"0\" allowfullscreen></iframe></li><br />";
	}

		
	?>
	</ul>