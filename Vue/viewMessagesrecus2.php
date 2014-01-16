<h1>Messages reçus</h1>
<hr />

<?php
include("../Modele/Message.php");
	while ($tuple = mysql_fetch_array($res))
	{ ?>	
		<div class="container">
			<div class="gauche">
				<?php echo ".$tuple[sujetM]."; ?>
			</div>
			<div class="milieu">
				<?php echo ".$tuple[nomM]."; ?>
			</div>
			<div class="droite">
				<?php echo ".$tuple[prenomM]."; ?>
			</div>
			<div class="dessous">
				<?php echo ".$tuple[messageM]."; ?>
			</div>
			<div class="suppr">
			<?php echo"<button type= \"button\" " . "onclick=\"location.href='./controlSupMessage.php?idM=" 
		. $tuple['idM']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Message'/>
        </button>";?>
			</div>
		</div>

		<br/>
<?php
	} 
		?>

	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>