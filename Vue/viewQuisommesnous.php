<h1>Qui sommes-nous ?</h1>
<hr />

<h3>Membres du bureau de l'association Nadalenca :</h3>
	<table border = "1">
		<tr>
			<td>Statut</td>
			<td>Prénom</td>
			<td>Nom</td>
			<td>Email</td>
<?php
	while ($tuple = mysql_fetch_array($res))
	{ 	
		echo "<tr>"
				."<td>Président</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}

	while ($tuple1 = mysql_fetch_array($res1))
	{ 	
		echo "<tr>"
				."<td>Vice-Président</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}

	while ($tuple2 = mysql_fetch_array($res2))
	{ 	
		echo "<tr>"
				."<td>Trésorier</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}

	while ($tuple3 = mysql_fetch_array($res3))
	{ 	
		echo "<tr>"
				."<td>Trésorier Adjoint</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}

	while ($tuple4 = mysql_fetch_array($res4))
	{ 	
		echo "<tr>"
				."<td>Secrétaire</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}

	while ($tuple5 = mysql_fetch_array($res5))
	{ 	
		echo "<tr>"
				."<td>Secrétaire Adjoint</td>"
				."<td>".$tuple['prenom']."</td>"
				."<td>".$tuple['nom']."</td>"
				."<td>".$tuple['email']."</td>"	 
			."</tr>";
	}


		echo "</table><br/>";
?>
	
	