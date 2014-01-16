	<body>
	<div id="page">
		
		<div id="banniere">
			<img src="../Images/banniere_nada.png" alt="banniere" title="Association Polyphonique Nadalenca de Montpellier"/>

			<ul id="drapeau">
				<li><a href="./controlAccueil.php"><img src="../Images/drapfr.png" title="Drapeau Français" alt="drapeau_fr"/></a></li>
				<li><a href="#"><img src="../Images/drapoc.png" title="Drapeau Occitan" alt="occitan_fr"/></a></li>
			</ul>
		</div>

		<div id="corps">
<?php
	@session_start();
	include("../Modele/Utilisateur.php");
	if(isset($_SESSION['login']))
	{
		$email = $_SESSION['login']; 
		$profil = Utilisateur::getUtilisateurByEmail($email);
		?>
				<ul id="menu_mem">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="./controleurMainRep.php">REPERTOIRE</a></li>
					<li><a href="#">MULTIMEDIA</a>
						<ul id="sousMenu">
							<li><a href="#">IMAGES</a></li>
							<li><a href="#">MUSIQUES</a></li>
							<li><a href="#">VIDEOS</a></li>
						</ul></li>
					<li><a href="#">PRODUCTIONS</a></li>
					<li><a href="./controlMembres.php">MEMBRES</a></li>
					<li><a href="./controlProfil.php">PROFIL</a></li>
					<li><a href="./deconnexion.php">DECONNEXION</a></li>
				</ul>
				<h4>Bonjour <?php echo ($profil->getPrenom());?></h4>
			<div id="contenu">
									
	<?php
	}
	else
	{?>	
				<ul id="menu_vis">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="#">PRODUCTIONS</a></li>
					<li><a href="./controlInscription.php">INSCRIPTION</a></li>
					<li><a href="./controlConnexion.php">CONNEXION</a></li>
				</ul>
			<div id="contenu">
<?php
}
?>
		