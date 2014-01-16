	<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifierRep.php" >
		<legend> Modifier un morceau :</legend>
		<fieldset>
		<input type="hidden" value="<?php echo $tuple['nom']; ?>" name="nom">
		<label>Fichiers Audios :</label></br>
		<?php 
		
		$idA = $tuple['idA'];
		$repaudio = mysql_query("SELECT * FROM audio WHERE ida = '$idA'") or die ("Erreur insertion / viewModifierRep.php / repaudio");
		$tupleaudio = mysql_fetch_array($repaudio);
		$nbfa = $tupleaudio['nbfichier'];
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
		
		$idT = $tuple['idT'];
		$reptexte = mysql_query("SELECT * FROM texte WHERE idt = '$idT'") or die ("Erreur insertion / viewModifierRep.php / repatexte");
		$tupletexte = mysql_fetch_array($reptexte);
		$nbft = $tupletexte['nbfich'];
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
		<input type="int" value="<?php echo $tupleaudio['nbfichier']; ?>" name="nbfa" />
		<input type="int" value="<?php echo $tupletexte['nbfich']; ?>" name="nbft" />
		<input type="submit" value="Modifier" />
		</fieldset>
	</form>
	<p>Nommer les fichiers exactement comme le fichier existant.</p>
	