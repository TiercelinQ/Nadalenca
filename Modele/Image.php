<?php

include ("./config.php");

class Image
{
	private $idI;
	private $titreI;
	private $nomI;
	private $descriptionI;
	
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->idI;
	}

	public function getTitre() 
	{ //un getter
		return $this->titreI;
	}

	public function getNom() 
	{ //un getter
		return $this->nomI;
	}

	public function getDescription() 
	{ //un getter
		return $this->descriptionI;
	}

	//Un constructeur
	public function __construct ($idI, $titreI, $nomI, $descriptionI) 
	{
		$this->idI = null;
		$this->titreI = $titreI;
		$this->nomI = $nomI;
		$this->descriptionI = $descriptionI;
	}

	//Création par ajout dans la base de données dans la table image
	public function create()
	{
		$idI= NULL;
		$titreI = addslashes(htmlspecialchars($this->titreI));
		$nomI = addslashes(htmlspecialchars($this->nomI));
		$descriptionI = addslashes(htmlspecialchars($this->descriptionI));
		$req = "INSERT INTO image (idI, titreI, nomI, descriptionI) VALUES ('$idI','$titreI','$nomI','$descriptionI')";
		$res = mysql_query($req) or die(mysql_error()); //("Erreur insertion :  Classe Image / Fonction insertion image")
	}
	
	//Suppression d'une image dans la base de données
	public static function delete($idI)
	{
		$req = mysql_query("DELETE FROM image WHERE idI = '$idI'");
		mysql_query($req);
	}

	//Vérification si une image existe dans la base de données par son idI
	public static function existId($idI)
	{
		$req = mysql_query("SELECT count(*) FROM image WHERE idI = '$idI'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}
	
	public static function getNomById($idI)
	{
		$req = "SELECT nomI FROM image WHERE idI='$idI'";
		$res = mysql_query($req) or die(mysql_error());
		$tuple = mysql_fetch_array($res);
		return($tuple['nomI']);
	}

	}