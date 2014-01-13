<?php

include ("./config.php");

class Utilisateur 
{
	private $id;
	private $nom;
	private $prenom;
	private $mdp;
	private $email;
	private $adresseP;
	private $codeP;
	private $ville;
	private $numtelF;
	private $numtelM;
	private $admin; 
	private $statut;
	private $voix;
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->id;
	}
	
	public function getNom() 
	{ //un getter
		return $this->nom;
	}
	
	public function getPrenom() 
	{ //un getter
		return $this->prenom;
	}
	
	public function getMdp() 
	{ //un getter
		return $this->mdp;
	}
	
	public function getEmail() 
	{ //un getter
		return $this->email;
	}
	
	public function getStatut() 
	{ //un getter
		return $this->statut;
	}
	
	public function getAdresseP() 
	{ //un getter
		return $this->adresseP;
	}
	
	public function getCodeP() 
	{ //un getter
		return $this->codeP;
	}
	
	public function getVille() 
	{ //un getter
		return $this->ville;
	}
	
	public function getNumtelF() 
	{ //un getter
		return $this->numtelM;
	}
	
	public function getNumtelM() 
	{ //un getter
		return $this->numtelM;
	}
	
	public function getAdmin() 
	{ //un getter
		return $this->admin;
	}
	
	public function getVoix() 
	{
		return $this->voix;
	}
	
	//Un constructeur
	public function __construct ($id, $nom, $prenom, $email, $mdp, $statut, $admin, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix) 
	{
		$this->id = null;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		$this->mdp = $mdp;
		$this->statut = $statut;
		$this->admin = $admin;
		$this->adresseP = $adresseP;
		$this->codeP = $codeP;
		$this->ville = $ville;
		$this->numtelF = $numtelF;
		$this->numtelM = $numtelM;
		$this->voix = $voix;
	}
	
	//création d'un nouvel utilisateur avec insertion dans la base de donnée
	public function create()
	{
		$email = $this->email;
		$req = "SELECT * FROM utilisateur WHERE email='$email'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction create");
		
		if (mysql_num_rows($res) == 0)
		{ // l'utilisateur n'existe pas.
			$nom = $this->nom;
			$prenom = $this->prenom;
			$mdp = $this->mdp;
			$statut = $this->statut;
			$admin = $this->admin;
			$adresseP = $this->adresseP;
			$codeP = $this->codeP;
			$ville = $this->ville;
			$numtelF = $this->numtelF;
			$numtelM = $this->numtelM;
			$voix = $this->voix;

			$dn2 = mysql_num_rows(mysql_query('SELECT id FROM utilisateur'));
			$id=$dn2+1;

			$req = "INSERT INTO utilisateur VALUES ('$id','$nom','$prenom','$email','$mdp','$statut','$admin','$adresseP','$codeP','$ville','$numtelF','$numtelM','voix')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe Utilisateur / Fonction Insertion nouveau membre");
		}
		else
		{
			return null/*'Cet email est déjà utilisé'*/;
		}
	}

	//vérification si un utilisateur existe déjà ou non dans la base de donnée
	public static function Exist($email)
	{
		$req = "SELECT * FROM utilisateur WHERE email='$email'";
		$res = mysql_query($req) or die ("Erreur insertion: Classe Utilisateur / Fonction Exist");
		return (mysql_num_rows($res) != 0);
			
	}
	
	//suppression d'un utilisateur dans la base de donnée
	public function delete($id)
	{
		$req = mysql_query("DELETE FROM utilisateur WHERE id = '$id'");
		mysql_query($req);
	}

	//permet la connexion d'un utilisateur
	public static function connect($email, $mdp)
	{
		$req = "SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction Connect");

		if (mysql_num_rows($res) == 0)
		{
			return null;
		}
		else
		{
			$tuple = mysql_fetch_array($res);
			return $tuple['id'];
		}		
	}
	
	public static function getUtilisateurByEmail($email) 
	{ //une fonction statique
		$req = "SELECT * FROM utilisateur WHERE email='$email'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction getUtilisateurByEmail ");
		
		if (mysql_num_rows($res) == 0)
		{ //l'utilisateur n'existe pas
			return null;
		}

		$tuple = mysql_fetch_array($res);
		return new Utilisateur($tuple['id'], $tuple['nom'], $tuple['prenom'], $email, $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);
	}
	
	public static function getUtilisateurByID($id)
	{//une fonction statique
		$req ="SELECT * FROM utilisateur WHERE id='$id'";
		$res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction getUtilisateurByID ");
		
		if(mysql_num_rows($res) == 0)
		{//l'utilisateur n'existe pas
			return null;
		}
		
		$tuple = mysql_fetch_array($res);
		return new Utilisateur($id, $tuple['nom'], $tuple['prenom'], $tuple['email'], $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);		
	}


	public static function getUtilisateur()
	{
		$req="SELECT * from utilisateur";
		$res =mysql_query($req) or die ("Erreur insertion : Classe Utiisateur / Fonction getUtilisateur");
		while($dnn = mysql_fetch_array($res))
		{
			$tuple = mysql_fetch_array($res);
			return new Utilisateur($tuple['id'], $tuple['nom'], $tuple['prenom'], $tuple['email'], $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);
		}
	}

	/*public static function changeMotdePasse($email, $ancienmdp, $nouveaumdp)
        {//Une fonction que change le mot de passe
            $req = "SELECT * FROM utilisateur WHERE email='$email'";
            $res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse ");
            
            
            if(mysql_num_rows($res) != 0)
            {
                $req1 = "UPDATE utilisateur SET mdp = '$nouveaumdp' WHERE email ='$email'";
                $res1 = mysql_query($req1) or die ("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse p2 ");
                $tuple = mysql_fetch_array($res);
                return new Utilisateur($tuple['id'], $tuple['nom'], $tuple['prenom'], $email, $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);
            }
            
            return null;
        }
        */
    public static function changeMdp($email, $mdp)
    {
        $req = "UPDATE utilisateur SET mdp = '$mdp' WHERE email ='$email'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse");
		$req = "SELECT * FROM utilisateur WHERE email='$email'";
		$res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse");
		$tuple = mysql_fetch_array($res);
		return new Utilisateur($tuple['id'], $tuple['nom'], $tuple['prenom'], $email, $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);
		
    }
        
    public function changeStatut($id, $statut)
    {
        $req = "UPDATE utilisateur SET statut = '$statut' WHERE id ='$id'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeStatut ");
    }
        
    public function changeAdmin($id, $admin)
    {
    $req = "UPDATE utilisateur SET admin = '$admin' WHERE id ='$id'";
    $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeAdmin");
    }
        
    public function changeAdresse($id, $adresseP, $codeP, $ville)
    {
        $req = "UPDATE utilisateur SET adresseP ='$adresseP', codeP ='$codeP', ville ='$ville' WHERE id ='$id'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeAdresse");
    }
       
    public function changeNumF($id, $numtelF)
    {
        $req = "UPDATE utilisateur SET numtelF = '$numtelF' WHERE id ='$id'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changenumtelF");
    }
        
    public function changenumtelP($id, $numtelP)
    {
        $req = "UPDATE utilisateur SET nuntelP = '$numtelP' WHERE id ='$id'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changenumtelP");
    }
        
    public function changeVoix($id, $voix)
    {
        $req = "UPDATE utilisateur SET voix = '$voix' WHERE id ='$id'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeVoix");
    }        
        
    public static function changementInfo($email, $id,$nom, $prenom, $adresseP, $codeP, $ville, $numtelF, $numtelM, $voix)
    {//Une fonction qui change les informations de l'utilisateur
        /*$req = "SELECT id FROM utilisateur WHERE email='$email'";
        $res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction changeInfo Debut ");
            
        if(mysql_nums_rows($res) == 0) 
        {//L'utilisateur n'existe pas
            return null;
        }*/    
        $req = "SELECT * FROM utilisateur WHERE email='$email'";
        $res = mysql_query($req) or die ("Erreur insertion : Classe Utilisateur / Fonction changeInfo Debut ");
        $tuple = mysql_fetch_array($res);
            
        /*if($tuple['mdp'] != $mdp)
        {
            $req = "UPDATE utilisateur SET mdp = '$mdp' WHERE id ='$id'";
			$res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse");
        }
            
        
		if($tuple['statut'] != $statut)
        {
            $this->changeStatut($id, $statut);
        }
            
        if($tuple['admin'] != $admin)
        {
            changeAdmin($id, $admin);
        }*/
		if($tuple['nom'] != $nom) 
		{
			$req1 = "UPDATE utilisateur SET nom='$nom' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changeAdresse");
		}
		
		if($tuple['prenom'] != $prenom)
		{
			$req1 = "UPDATE utilisateur SET prenom='$prenom' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changeAdresse");
		}
		
        if($tuple['adresseP'] != $adresseP)
        {
            $req1 = "UPDATE utilisateur SET adresseP ='$adresseP', codeP ='$codeP', ville ='$ville' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changeAdresse");
        }
            
        if($tuple['numtelF'] != $numtelF)
        {
            $req1 = "UPDATE utilisateur SET numtelF = '$numtelF' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changenumtelF");
        }
            
        if($tuple['numtelM'] != $numtelM)
        {
            $req1 = "UPDATE utilisateur SET numtelM = '$numtelM' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changenumtelP");
        }
            
        if($tuple['voix'] != $voix)
        {
            $req1 = "UPDATE utilisateur SET voix = '$voix' WHERE email ='$email'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changeVoix");
        }
            
        return new Utilisateur($tuple['id'], $tuple['nom'], $tuple['prenom'], $email, $tuple['mdp'], $tuple['statut'], $tuple['admin'], $tuple['adresseP'], $tuple['codeP'], $tuple['ville'], $tuple['numtelF'], $tuple['numtelM'], $tuple['voix']);
    }
            


	public static function changeMdpoublie($email)
	{
        $req = "SELECT mdp FROM utilisateur WHERE email ='$email'";
        $res = mysql_query($req) or die("Erreur insertion : Classe Utilisateur / Fonction changeMotdePasse");
		$tuple = mysql_fetch_array($res);
		return($tuple['mdp']);
    }
}
?>




