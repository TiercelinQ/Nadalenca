<h1>Ajout d'un fichier texte</h1>
<hr />

<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifMorAjoutTexte.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>" /><!-- On récupère l'id via un input de type hidden, il n'est pas afficher, mais la valeur est gardé-->
	<input type="hidden" name="nb" value="<?php echo $nb; ?>" /><!-- On fait de même ici-->

<?php 
	//Input different en fonction du numéro du ficher qui est ajouté
	switch($nb)
	{
		case 1:
			echo "<input type=\"file\" name=\"texte1\" /> </br>";
			echo "types de fichier (Partition/Paroles) :";
			echo "<input type=\"texte\" name=\"ttexte1\" /></br>";	
			break;
		case 2:
			echo "<input type=\"file\" name=\"texte2\" /> </br>";
			echo "types de fichier (Partition/Paroles) :";
			echo "<input type=\"texte\" name=\"ttexte2\" /></br>";	
			break;
		case 3:
			echo "<input type=\"file\" name=\"texte3\" /> </br>";
			echo "types de fichier (Partition/Paroles) :";
			echo "<input type=\"texte\" name=\"ttexte3\" /></br>";
			break;
		case 4:
			echo "<input type=\"file\" name=\"texte4\" /> </br>";
			echo "types de fichier (Partition/Paroles) :";
			echo "<input type=\"texte\" name=\"ttexte4\" /></br>";
			break;
		case 5:
			echo "<input type=\"file\" name=\"texte5\" /> </br>";
			echo "types de fichier (Partition/Paroles) :";
			echo "<input type=\"texte\" name=\"ttexte5\" /></br>";
			break;
	}
?>
	<input type="submit" value="Ajouter" />
</form>
</br>
<a href="../Controleur/controlRepAdmin.php">Retour</a>