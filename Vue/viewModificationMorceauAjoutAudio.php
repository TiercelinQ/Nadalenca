<h1>Ajout d'une piste audio</h1>
<hr />

<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifMorAjoutAudio.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="nb" value="<?php echo $nb; ?>" />

<?php 
	switch($nb)
	{
		case 2:
			echo "<input type=\"file\" name=\"audio2\" /> </br>";
			echo "types de destinaires(voix/genre) :";
			echo "<input type=\"texte\" name=\"taudio2\" /></br>";	
			break;
		case 3:
			echo "<input type=\"file\" name=\"audio3\" /> </br>";
			echo "types de destinaires(voix/genre) :";
			echo "<input type=\"texte\" name=\"taudio3\" /></br>";
			break;
		case 4:
			echo "<input type=\"file\" name=\"audio4\" /> </br>";
			echo "types de destinaires(voix/genre) :";
			echo "<input type=\"texte\" name=\"taudio4\" /></br>";
			break;
		case 5:
			echo "<input type=\"file\" name=\"audio5\" /> </br>";
			echo "types de destinaires(voix/genre) :";
			echo "<input type=\"texte\" name=\"taudio5\" /></br>";
			break;
	}
?>
	<input type="submit" value="Ajouter" />
</form>