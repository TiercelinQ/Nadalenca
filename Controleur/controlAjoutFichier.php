<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
include("./menu.php");
include("../Modele/Repertoire.php");
var_dump($_POST);
var_dump($_FILES);
echo $_FILES['audio1']['error'];
$nbfichau = $_POST['nbfa'];
$nbfichtxt = $_POST['nbft'];
$nom = $_POST['nomR'];
switch($nbfichau)
{
	case 1:
		$rep = Repertoire::createaudio1($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1']);
		break;
	case 2:
		$rep = Repertoire::createaudio2($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2']);
		break;
	case 3:
		$rep = Repertoire::createaudio3($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3']);
		break;
	case 4:
		$rep = Repertoire::createaudio4($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3'], $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['tauido4']);
		break;
	case 5:
		$rep = Repertoire::createaudio5($nom,$nbfichau,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3'], $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['tauido4'], $_FILES['audio5']['name'], $_FILES['audio5']['tmp_name'], $_POST['taudio5']);
		break;
}

switch($nbfichtxt)
{
	case 1:
		$rep = Repertoire::createtexte1($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
		break;
	case 2:
		$rep = Repertoire::createtexte2($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2']);
		break;
	case 3:
		$rep = Repertoire::createtexte3($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3']);
		break;
	case 4:
		$rep = Repertoire::createtexte4($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3'], $_FILES['texte4']['name'], $_FILES['texte4']['tmp_name'], $_POST['ttexte4']);
		break;
	case 5:
		$rep = Repertoire::createtexte5($nom,$nbfichtxt,$_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $_FILES['texte3']['name'], $_FILES['texte3']['tmp_name'], $_POST['ttexte3'], $_FILES['texte4']['name'], $_FILES['texte4']['tmp_name'], $_POST['ttexte4'], $_FILES['texte5']['name'], $_FILES['texte5']['tmp_name'], $_POST['ttexte5']);
		break;
}
$rep = Repertoire::createRep($nom);
include("../Vue/viewAjoutFichierReussi.php");
include("./footer.php");
?>

