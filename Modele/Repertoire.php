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
	
	public static function moveFile($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp)
	{
		$target_pathaudio = "../Audio/";
		$target_pathaudio = $target_pathaudio . basename( $audio);
		move_uploaded_file($audiotmp, $target_pathaudio);
		$target_pathtexte = "../Texte/";
		$target_pathtexte = $target_pathtexte . basename( $texte);
		move_uploaded_file($textetmp, $target_pathtexte);
		$target_pathalto = "../Voix/alto/";
		$target_pathalto = $target_pathalto . basename( $alto);
		move_uploaded_file($altotmp, $target_pathalto);
		$target_pathbasse = "../Voix/basse/";
		$target_pathbasse = $target_pathbasse . basename( $basse);
		move_uploaded_file($bassetmp, $target_pathbasse);
		$target_pathsoprano = "../Voix/soprano/";
		$target_pathsoprano = $target_pathsoprano . basename($soprano);
		move_uploaded_file($sopranotmp, $target_pathsoprano);
		$target_pathtenor = "../Voix/tenor/";
		$target_pathtenor = $target_pathtenor . basename( $tenor);
		move_uploaded_file($tenortmp, $target_pathtenor);
	}
	
	public static function getRepById($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / classe repertoire / fonction getRepById");
		$tuple = mysql_fetch_array($res);
		return new Repertoire($id, $tuple['audioR'],$tuple['texteR'],$tuple['altoR'],$tuple['basseR'],$tuple['sopranoR'],$tuple['tenorR']);
	}
	
	
	//suppression d'un morceau du repertoire
	public static function delete($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idR = '$id'") or die ("Erreur insertion / Classe répertoire/Fonction delete");
		$tuple = mysql_fetch_array($res);
		$target_pathaudio = "../Audio/";
		$target_pathaudio = $target_pathaudio . $tuple['audioR'];
		unlink($target_pathaudio);
		$target_pathtexte = "../Texte/";
		$target_pathtexte = $target_pathtexte . $tuple['texteR'];
		unlink($target_pathtexte);
		$target_pathalto = "../Voix/alto/";
		$target_pathalto = $target_pathalto . $tuple['altoR'];
		unlink($target_pathalto);
		$target_pathbasse = "../Voix/basse/";
		$target_pathbasse = $target_pathbasse . $tuple['basseR'];
		unlink($target_pathbasse);
		$target_pathsoprano = "../Voix/soprano/";
		$target_pathsoprano = $target_pathsoprano . $tuple['sopranoR'];
		unlink($target_pathsoprano);
		$target_pathtenor = "../Voix/tenor/";
		$target_pathtenor = $target_pathtenor . $tuple['tenorR'];
		unlink($target_pathtenor);
		
	}
	
	public static function deletebdd($id)
	{
		$req = mysql_query("DELETE FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / Classez Repertoire / Fonction delete");
		return true;
	}
	
	
	public static function changementRep($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp)
	{
		if($audio != null)
		{
			$target_pathaudio = "../Audio/";
			$target_pathaudio = $target_pathaudio . basename( $audio);
			move_uploaded_file($audiotmp, $target_pathaudio);
		}
		if($texte != null)
		{
			$target_pathtexte = "../Texte/";
			$target_pathtexte = $target_pathtexte . basename( $texte);
			move_uploaded_file($textetmp, $target_pathtexte);
		}
		if($alto != null)
		{
			$target_pathalto = "../Voix/alto/";
			$target_pathalto = $target_pathalto . basename( $alto);
			move_uploaded_file($altotmp, $target_pathalto);
		}
		if($basse != null)
		{
			$target_pathbasse = "../Voix/basse/";
			$target_pathbasse = $target_pathbasse . basename( $basse);
			move_uploaded_file($bassetmp, $target_pathbasse);
		}
		if($soprano != null)
		{
			$target_pathsoprano = "../Voix/soprano/";
			$target_pathsoprano = $target_pathsoprano . basename($soprano);
			move_uploaded_file($sopranotmp, $target_pathsoprano);
		}
		if($tenor != null)
		{
			$target_pathtenor = "../Voix/tenor/";
			$target_pathtenor = $target_pathtenor . basename( $tenor);
			move_uploaded_file($tenortmp, $target_pathtenor);
		}	
		
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
}
?>
	
}
?>
	