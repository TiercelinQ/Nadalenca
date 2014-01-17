<?php

include("./config.php");

class Repertoire
{
	private $idR;
	private $nomR;
	private $idA;
	private $idT;
	
	//Les fonctions :
	public function getId()
	{
		return $this->idR;
	}
	
	public function getNom()
	{
		return $this->nomR;
	}
	
	public function getIdA()
	{
		return $this->idA;
	}
	
	public function getIdT()
	{
		return $this->idT;
	}
	
	//Un constructeur
	public function __construct ($nomR, $idA, $idT) 
	{
		$this->idR = null;
		$this->nomR = $nomR;
		$this->idA = $idA;
		$this->idT = $idT;
	}
	
	public static function deletebdd($id)
	{
		$req = mysql_query("DELETE FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / Classez Repertoire / Fonction delete");
		return true;
	}
	
	
	public static function createRep($nom)
	{
		$ida = mysql_query("SELECT * FROM audio WHERE nom = '$nom'") or die("Erreur insertion 1");
		$tupleaudio = mysql_fetch_array($ida);
		$idaudio = $tupleaudio['ida'];
		$idt = mysql_query("SELECT * FROM texte WHERE nom = '$nom'") or die("Erreur insertion 2");
		$tupletexte = mysql_fetch_array($idt);
		$idtexte = $tupletexte['idt'];
		$res = mysql_query("INSERT INTO repertoire(nom, idA, idT) VALUES('$nom', '$idaudio','$idtexte')") or die ("Erreur insertion 3");
	}
	
	public static function createaudio1($nom, $nb, $audio1, $audio1tmp, $taudio1)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1) VALUES ('$nom','$nb','$audio1','$taudio1')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		echo $target_pathaudio;
		$target_path = $target_pathaudio . basename($audio1);
		echo $target_path;
		if(move_uploaded_file($audio1tmp, $target_path))
		{ echo "OK"; } else { echo"KO";}
	}
	
	public static function createaudio2($nom, $nb, $audio1, $audio1tmp, $taudio1, $audio2, $audio2tmp, $taudio2)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1, nomfich2, dest2) VALUES ('$nom','$nb','$audio1','$taudio1','$audio2','$taudio2')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . basename($audio1);
		move_uploaded_file($audio1tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio2);
		move_uploaded_file($audio2tmp, $target_path);
	}
	
	public static function createaudio3($nom, $nb, $audio1, $audio1tmp, $taudio1, $audio2, $audio2tmp, $taudio2, $audio3, $audio3tmp, $taudio3)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3) VALUES ('$nom','$nb','$audio1','$taudio1','$audio2','$taudio2','$audio3','$taudio3')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . basename($audio1);
		move_uploaded_file($audio1tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio2);
		move_uploaded_file($audio2tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio3);
		move_uploaded_file($audio3tmp, $target_path);
	}
	
	public static function createaudio4($nom, $nb, $audio1, $audio1tmp, $taudio1, $audio2, $audio2tmp, $taudio2, $audio3, $audio3tmp, $taudio3, $audio4, $audio4tmp, $taudio4)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3, nomfich4, dest4) VALUES ('$nom','$nb','$audio1','$taudio1','$audio2','$taudio2','$audio3','$taudio3','$audio4','$taudio4')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . basename($audio1);
		move_uploaded_file($audio1tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio2);
		move_uploaded_file($audio2tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio3);
		move_uploaded_file($audio3tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio4);
	}
	
	public static function createaudio5($nom, $nb, $audio1, $audio1tmp, $taudio1, $audio2, $audio2tmp, $taudio2, $audio3, $audio3tmp, $taudio3, $audio4, $audio4tmp, $taudio4, $audio5, $audio5tmp, $taudio5)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3, nomfich4, dest4, nomfich5, dest5) VALUES ('$nom','$nb','$audio1','$taudio1','$audio2','$taudio2','$audio3','$taudio3','$audio4','$taudio4','$audio5','$taudio5')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . basename($audio1);
		move_uploaded_file($audio1tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio2);
		move_uploaded_file($audio2tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio3);
		move_uploaded_file($audio3tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio4);
		move_uploaded_file($audio4tmp, $target_path);
		$target_path = $target_pathaudio . basename($audio5);
		move_uploaded_file($audio5tmp, $target_path);
	}
	
	public static function createtexte1($nom, $nb, $texte1, $texte1tmp, $ttexte1)
	{
		$req = "INSERT INTO texte (nom,nbfich, nomfich1, dest1) VALUES ('$nom','$nb','$texte1','$ttexte1')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
	}
	
	public static function createtexte2($nom, $nb, $texte1, $texte1tmp, $ttexte1, $texte2, $texte2tmp, $ttexte2)
	{
		$req = "INSERT INTO texte (nom,nbfich, nomfich1, dest1, nomfich2, dest2) VALUES ('$nom','$nb','$texte1','$ttexte1','$texte2','$ttexte2')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte2);
		move_uploaded_file($texte2tmp, $target_path);
	}
	
	public static function createtexte3($nom, $nb, $texte1, $texte1tmp, $ttexte1, $texte2, $texte2tmp, $ttexte2, $texte3, $texte3tmp, $ttexte3)
	{
		$req = "INSERT INTO texte (nom,nbfich, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3) VALUES ('$nom','$nb','$texte1','$ttexte1','$texte2','$ttexte2','$texte3','$ttexte3')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte2);
		move_uploaded_file($texte2tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte3);
		move_uploaded_file($texte3tmp, $target_path);
	}
	
	public static function createtexte4($nom, $nb, $texte1, $texte1tmp, $ttexte1, $texte2, $texte2tmp, $ttexte2, $texte3, $texte3tmp, $ttexte3, $texte4, $texte4tmp, $ttexte4)
	{
		$req = "INSERT INTO texte (nom,nbfich, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3, nomfich4, dest4) VALUES ('$nom','$nb','$texte1','$ttexte1','$texte2','$ttexte2','$texte3','$ttexte3','$texte4','$ttexte4')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte2);
		move_uploaded_file($texte2tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte3);
		move_uploaded_file($texte3tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte4);
	}
	
	public static function createtexte5($nom, $nb, $texte1, $texte1tmp, $ttexte1, $texte2, $texte2tmp, $ttexte2, $texte3, $texte3tmp, $ttexte3, $texte4, $texte4tmp, $ttexte4, $texte5, $texte5tmp, $ttexte5)
	{
		$req = "INSERT INTO texte (nom,nbfich, nomfich1, dest1, nomfich2, dest2, nomfich3, dest3, nomfich4, dest4, nomfich5, dest5) VALUES ('$nom','$nb','$texte1','$ttexte1','$texte2','$ttexte2','$texte3','$ttexte3','$texte4','$ttexte4','$texte5','$ttexte5')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte2);
		move_uploaded_file($texte2tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte3);
		move_uploaded_file($texte3tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte4);
		move_uploaded_file($texte4tmp, $target_path);
		$target_path = $target_pathtexte . basename($texte5);
		move_uploaded_file($texte5tmp, $target_path);
	}
	
	public static function changementaudionb($id, $nb, $audio, $audiotmp, $audiodest)
	{
		$res = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / changementaudionb / res");
		$tuple = mysql_fetch_array($res);
		$target_pathaudio = "../Audio/";
		
		switch($nb)
		{
			case 1:
				$target_path = $target_pathaudio . basename($tuple['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich1='$audio', dest1='$audiodest' WHERE ida='$id'") or die ("Erreur / changementaudionb / req 1");
				$retour = true;
				break;
			case 2:
				$target_path = $target_pathaudio . basename($tuple['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich2 = '$audio', dest2 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathaudio . basename($tuple['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich3 = '$audio', dest3 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathaudio . basename($tuple['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich4 = '$audio', dest4 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathaudio . basename($tuple['nomfich5']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich5 = '$audio', dest5 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 5");
				$retour = true;
				break;
		}
		return $retour;
	}
}
?>	