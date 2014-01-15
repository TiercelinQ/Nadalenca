<?php

include ("../config.php");

class Lien
{

	private $idL;
	private $descriL;
	private $lienL;

	//les methodes:
	public function getIdL() 
	{ //un getter
		return $this->idL;
	}
	
	public function getDescriL() 
	{ //un getter
		return $this->descriL;
	}
	
	public function getLienL() 
	{ //un getter
		return $this->lienL;
	}



	//Un constructeur
	public function __construct ($idL, $descriL, $lienL) 
	{
		$this->idL = null;
		$this->descriL = $descriL;
		$this->lienL = $lienL;
	}


	//création d'un nouveau lien dans la base de données lien
	public function create()
	{

		$this->idL = null;
		$this->descriL = $descriL;
		$this->lienL = $lienL;

			$req = "INSERT INTO lien (idL, descriL, lienL) VALUES ('$idL','$descriL','$lienL')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe Lien / Fonction insertion lien");
	}

	//suppression d'un lien dans la base de donnée lien
	public function delete($idL)
	{
		$req = mysql_query("DELETE FROM lien WHERE id = '$idL'");
		mysql_query($req);
	}

	