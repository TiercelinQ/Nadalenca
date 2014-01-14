Membres de Nadalenca :
		<table border = "1">
			<tr>
				<td>id</td>
				<td>Nom</td>
				<td>Prénom</td>
				<td>Adresse Email</td>
	<?php
	while ($tuple = mysql_fetch_array($res))
	{ 
		echo "<tr>"
				."<td>".$tuple['id']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['email']."</td>"
			."</tr>";
	}
		echo "</table><br/>";
	?>
