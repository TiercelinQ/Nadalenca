<h1>Membres de l'association</h1>
<hr />

	<table border = "1">
		<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Email</td>
			<td>N° de téléphone fixe</td>
			<td>N° de téléphone mobile</td>
		</tr>
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 
		echo"<tr>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['email']."</td>"
				."<td>".$tuple['numtelF']."</td>"
				."<td>".$tuple['numtelM']."</td>"
			."</tr>";
			
	}
		echo "</table><br/>";
	?>
