<h1>Ajout</h1>
<hr />
	
	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutFichier.php" >
		<legend> Ajouter un morceau :</legend>
		<fieldset>
		<input type="hidden" value="<?php echo $nbfa ?>" name="nbfa"/></br>
		<input type="hidden" value="<?php echo $nbft ?>" name="nbft"/></br>
		<label>Nom du morceau :</label>
		<input type="text" name="nomR"/></br> 
		
		<label>Fichiers Audios :</label></br>
		<?php 
		$i=1;
		while($i < $nbfa+1){
			$audioi = "audio".$i;
			$taudioi = "taudio".$i;
			$file = "file";
			$input = "<input type="."$file"." name="."$audioi"." /></br>";
			echo "$input";
			echo "types de destinaires(voix/genre) :";
			echo "<input type="."texte"." name="."$taudioi"." /></br>";
			$i = $i +1;
		} 
		?> 
		<label>Fichiers textes : </label></br>
		<?php
		$j=1;
		while($j < $nbft+1)
		{
			$textej = "texte".$j;
			$ttextej = "ttexte".$j;
			$file = "file";
			$input = "<input type="."$file"." name="."$textej"." /></br>";
			echo "$input";
			echo "types de fichiers(Partitions/Paroles)</br>";
			echo "<input type="."texte"." name="."$ttextej"." /></br>";
			$j = $j +1;
		}
		?>
		
		<input type="submit" value="Ajouter" />
		</fieldset>
	</form>
	<p>Les fichiers audios et textes ne doivent pas comprendrent d'espaces dans leur nom (Ex : mon fichier.extension n'est pas bon, mon_fichier.extension, et monfichier.extension sont bons.)</p>
	