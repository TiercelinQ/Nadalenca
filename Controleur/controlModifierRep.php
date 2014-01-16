<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	include("./menu.php");
	include("../Modele/Repertoire.php");
	
	$nom = $_POST['nom'];
	$nbfichau = $_POST['nbfa'];
	$nbfichtxt = $_POST['nbft'];
switch($nbfichau)
{
	case 1:
		$rep = Repertoire::changeaudio1($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1']);
		break;
	case 2:
		$rep = Repertoire::changeaudio2($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2']);
		break;
	case 3:
		$rep = Repertoire::changeaudio3($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3']);
		break;
	case 4:
		$rep = Repertoire::changeaudio4($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3'], $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['tauido4']);
		break;
	case 5:
		$rep = Repertoire::changeaudio5($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3'], $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['tauido4'], $_FILES['audio5']['name'], $_FILES['audio5']['tmp_name'], $_POST['taudio5']);
		break;
}

switch($nbfichtxt)
{
	case 1:
		$rep = Repertoire::changetexte1($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
		break;
	case 2:
		$rep = Repertoire::changetexte2($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2']);
		break;
	case 3:
		$rep = Repertoire::changetexte3($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3']);
		break;
	case 4:
		$rep = Repertoire::changetexte4($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3'], $_FILES['texte4']['name'], $_FILES['texte4']['tmp_name'], $_POST['ttexte4']);
		break;
	case 5:
		$rep = Repertoire::changetexte5($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3'], $_FILES['texte4']['name'], $_FILES['texte4']['tmp_name'], $_POST['ttexte4'], $_FILES['texte5']['name'], $_FILES['texte5']['tmp_name'], $_POST['ttexte5']);
		break;
}
	include("../Vue/viewRepertoireMorceau.php");
	include("./footer.php");
?>	