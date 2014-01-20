<h1>Annuaire de l'association</h1>
<hr />

	<table border = "1">
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
			<th>N° de téléphone fixe</th>
			<th>N° de téléphone mobile</th>
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
