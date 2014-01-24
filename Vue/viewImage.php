<h1>Images</h1>
<hr />

		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li>Titre : " . $tuple['titreI'] . "<br /> Description : " . $tuple['descriptionI'] . "<br />" . "</li>";
		$repertoire_img = "../Images";
		$img = $tuple['nomI'];
		echo"<img src=\"../Images/" . $img . "\"/>";
	}

		
	?>
	
	</ul>