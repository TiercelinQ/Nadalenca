<h1>Ajout d'un Morceau</h1>
<hr />
	
	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutFichier.php" >
		<label>Nom du morceau :</label>
		<input type="text" name="nomR" /></br> <!-- input du nom du morceau-->
		
		<label>Fichier Audio :</label></br><!--input de type file pour le fichier audio avec un maximun de 8Mo-->
		<p> Les formats de fichier gérés sont MP3, AAC, OGG, WAC </p>
		<?php 	echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "types de destinaires(Voix/Genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";		
		?> 
		<label>Fichier texte : </label></br><!-- input de type file pour le fichier texte-->
		<p> Les formats de fichier gérés sont PDF, DOC </p>
		<?php
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "types de fichier(Partitions, Paroles) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
		?>
		
		<input type="submit" value="Ajouter" />
		</fieldset>
	</form>
	</br>
	<a href="../Controleur/controlRepAdmin.php">Retour</a>