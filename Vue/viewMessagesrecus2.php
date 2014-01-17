<h1>Messages reçus</h1>
<hr />

<?php
include("../Modele/Message.php");
	while ($tuple = mysql_fetch_array($res))
	{ ?>	
		<div class="container_message">
			<div class="gauche_message">
				<p>SUJET : <?php echo "$tuple[sujetM]"; ?></p>
			</div>
			<div class="milieu_message">
				<p>NOM : <?php echo "$tuple[nomM] $tuple[prenomM]"; ?></p>
			</div>
			<div class="droite_message">
				<p>EMAIL : <?php echo "$tuple[emailM]"; ?></p>
			</div>
			<div class="dessous_message">
				<p>MESSAGE : <?php echo "$tuple[messageM]"; ?></p>
			</div>
			<div class="suppr_message">
			<?php echo"<button type= \"button\" " . "onclick=\"location.href='./controlSupMessage.php?idM=" 
		. $tuple['idM']. "'\"><img src='../Images/remove.png'  title='Suppression' alt='Image Suppression Message'/>
        </button>";?>
			</div>
		</div>

		<br/>
<?php
	} 
		?>
	<br />
	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>