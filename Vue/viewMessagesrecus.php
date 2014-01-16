<h1>Messages reçus</h1>
<hr />

	<table border = "1">
		<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Email</td>
			<td>Sujet</td>
			<td>Date</td>
			<td>Message</td>
			<td>Supprimer</td>
<?php
include("../Modele/Message.php");
	while ($tuple = mysql_fetch_array($res))
	{ 	
		echo "<tr>"
				."<td>".$tuple['nomM']."</td>"
				."<td>".$tuple['prenomM']."</td>"
				."<td>".$tuple['emailM']."</td>"
				."<td>".$tuple['sujetM']."</td>"
				."<td>".$tuple['dateM']."</td>"	 
				."<td>".$tuple['messageM']."</td>"	
				."<td>"."<button type= \"button\" " . "onclick=\"location.href='./controlSupMessage.php?idM=" 
		. $tuple['idM']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Message'/>
        </button>"."</td>"
			."</tr>";
	}
		echo "</table><br/>";
	?>