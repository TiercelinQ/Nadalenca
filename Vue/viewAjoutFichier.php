<h1>Ajout d'un Morceau</h1>
<hr />
	
	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutFichier.php" >
		<label>Nom du morceau :</label>
		<input type="text" name="nomR" /></br> 
		
		<label>Fichier Audio :</label></br>
		<?php 	echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"15000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";		
		?> 
		<label>Fichier texte : </label></br>
		<?php
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
		?>
		
		<input type="submit" value="Ajouter" />
		</fieldset>
	</form>
	<p>Les fichiers audios et textes ne doivent pas comprendrent d'espaces dans leur nom (Ex : mon fichier.extension n'est pas bon, mon_fichier.extension, et monfichier.extension sont bons.)</p>
	