<?php

include ("../config.php");

class Lien
{

	private $idL;
	private $description;
	private $lien;

	//les methodes:
	public function getIdL() 
	{ //un getter
		return $this->idL;
	}
	
	public function getDescriL() 
	{ //un getter
		return $this->description;
	}
	
	public function getLienL() 
	{ //un getter
		return $this->lien;
	}



	//Un constructeur
	public function __construct ($idL, $description, $lien) 
	{
		$this->idL = null;
		$this->description = $description;
		$this->lien = $lien;
	}


	//création d'un nouveau lien dans la base de données lien
	public function create()
	{
		$idL = null;
		$description = addslashes(htmlspecialchars($this->description));
		$lien = addslashes(htmlspecialchars($this->lien));

			$req = "INSERT INTO lien (id, lien, description) VALUES ('$idL','$lien','$description')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe Lien / Fonction create lien");
	}

	//suppression d'un lien dans la base de donnée lien
	public static function delete($id)
	{
		$req = mysql_query("DELETE FROM lien WHERE id = '$id'");
		mysql_query($req);
	}

	//Vérification si un lien existe déjà dans la base de données par son id
	public static function exist($id)
	{
		$req = mysql_query("SELECT count(*) FROM lien WHERE id = '$id'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}

	public static function getLienById($id) 
	{ //une fonction statique
		$req = "SELECT * FROM lien WHERE id='$id'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Lien / Fonction getLienById ");
		
		if (mysql_num_rows($res) == 0)
		{
			return null;
		}

		$tuple = mysql_fetch_array($res);
		return new Lien($tuple['id'], $tuple['lien'], $tuple['description']);
	}

	public static function modifLien($id, $lien, $description)
    {   
        $req = "SELECT * FROM lien WHERE id='$id'";
        $res = mysql_query($req) or die ("Erreur insertion : Classe Concert / Fonction modifConcert Debut ");
        $tuple = mysql_fetch_array($res);
		
		if($tuple['description'] != $description)
		{
			$req1 = "UPDATE lien SET description='$description' WHERE lien ='$lien'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Lien / Fonction changeDescription");
		}

		return new Lien($tuple['id'], $tuple['lien'], $tuple['description']);
    }
	
}