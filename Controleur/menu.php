	<body>
	<div id="page">
		
		<div id="banniere">
			<img src="../Images/banniere.png" alt="banniere"/>

			<ul id="drapeau">
				<li><a href="./controlAccueil.php"><img src="../Images/drapfr.png" title="Drapeau Fr" alt="drapeau_fr"/></a></li>
				<li><a href="#"><img src="../Images/drapoc.png" alt="occitan_fr"/></a></li>
			</ul>
		</div>

<?php
	@session_start();
	if(isset($_SESSION['login']))
	{?>
				<ul id="menu">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="./controleurMainRep.php">REPERTOIRE</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="./controlMembres.php">MEMBRES</a></li>
					<li><a href="./controlProfil.php">PROFIL</a></li>
					<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0) {
						echo '<li><a href="./admin">ADMINISTRATION</a></li>';
					}?>
					<li><a href="./deconnexion.php">DECONNEXION</a></li>
				</ul>

		
	<?php
	}
	else
	{?>	
				<ul id="menu_vis">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="./controlInscription.php">INSCRIPTION</a></li>
					<li><a href="./controlConnexion.php">CONNEXION</a></li>
				</ul>
		
<?php
}
?>
		