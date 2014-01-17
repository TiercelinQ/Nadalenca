<h1>Ajout</h1>
<hr />
	
	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutFichier.php" >
		<legend> Ajouter un morceau :</legend>
		<fieldset>
		<label>Nombres de fichiers audios :</label>
		<input type="hidden" value="<?php echo $nbfa ?>" name="nbfa" /></br>
		<label>Nombres de fichiers textes :</label>
		<input type="hidden" value="<?php echo $nbft ?>" name="nbft" /></br>
		<label>Nom du morceau :</label>
		<input type="text" name="nomR" /></br> 
		
		<label>Fichiers Audios :</label></br>
		<?php 
		switch($nbfa)
		{
			case 1:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";
				break;
			case 2:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";
				echo "<input type=\"file\" name=\"audio2\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio2\" /></br>";
				break;
			case 3:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";
				echo "<input type=\"file\" name=\"audio2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio2\" /></br>";
				echo "<input type=\"file\" name=\"audio3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio3\" /></br>";
				break;
			case 4:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";
				echo "<input type=\"file\" name=\"audio2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio2\" /></br>";
				echo "<input type=\"file\" name=\"audio3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio3\" /></br>";
				echo "<input type=\"file\" name=\"audio4\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio4\" /></br>";
				break;
			case 5:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"audio1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio1\" /></br>";
				echo "<input type=\"file\" name=\"audio2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio2\" /></br>";
				echo "<input type=\"file\" name=\"audio3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio3\" /></br>";
				echo "<input type=\"file\" name=\"audio4\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio4\" /></br>";
				echo "<input type=\"file\" name=\"audio5\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"taudio5\" /></br>";
				break;
		}
	
				
		?> 
		<label>Fichiers textes : </label></br>
		<?php
		switch($nbft)
		{
			case 1:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
				break;
			case 2:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
				echo "<input type=\"file\" name=\"texte2\" /></br>";
				echo "types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte2\" /></br>";
				break;
			case 3:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
				echo "<input type=\"file\" name=\"texte2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte2\" /></br>";
				echo "<input type=\"file\" name=\"texte3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte3\" /></br>";
				break;
			case 4:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
				echo "<input type=\"file\" name=\"texte2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte2\" /></br>";
				echo "<input type=\"file\" name=\"texte3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte3\" /></br>";
				echo "<input type=\"file\" name=\"texte4\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte4\" /></br>";
				break;
			case 5:
				echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" /></br>";
				echo "<input type=\"file\" name=\"texte1\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte1\" /></br>";
				echo "<input type=\"file\" name=\"texte2\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte2\" /></br>";
				echo "<input type=\"file\" name=\"texte3\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte3\" /></br>";
				echo "<input type=\"file\" name=\"texte4\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte4\" /></br>";
				echo "<input type=\"file\" name=\"texte5\" /></br>";
				echo "Types de destinaires(voix/genre) :";
				echo "<input type=\"texte\" name=\"ttexte5\" /></br>";
				break;
		}
		?>
		
		<input type="submit" value="Ajouter" />
		</fieldset>
	</form>
	<p>Les fichiers audios et textes ne doivent pas comprendrent d'espaces dans leur nom (Ex : mon fichier.extension n'est pas bon, mon_fichier.extension, et monfichier.extension sont bons.)</p>
	