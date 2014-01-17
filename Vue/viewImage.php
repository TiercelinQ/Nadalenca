<h1>Image</h1>
<hr />

		<ul>
					
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 

		echo "<li>" . $tuple['titreI'] . $tuple['descriptionI'] . "<br />" . "</li>";
		$repertoire_img = "../Images";
		$mon_img = $tuple['nomI'];
		echo $repertoire_img."/".$mon_img.".jpg";
		echo"<img src=\"". $repertoire_img . "/\"" .$mon_img. ".jgp">;
	}

		
	?>
	
	</ul>