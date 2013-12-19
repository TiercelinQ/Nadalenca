<?php include("./config.php");?>
<!DOCTYPE html>
<html>
   <head>
       <title>CONTACT</title>
           <meta charset="utf-8" />
           <link rel="stylesheet" href="style.css" />
   </head>
   
   <?php include("menu.php"); ?>
           
			<h3>Veuillez remplir ce formulaire pour nous contacter</h3>
			<hr />
        <form method="post" action="./Controleur/controlContact.php">
					<fieldset>
		  			<label>Nom</label>
              <input type="text" placeholder="Nom" name="nomM" required/> <br />
						<label>Prénom</label>
              <input type="text" placeholder="Prénom" name="prenomM" required/> <br />
						<label>Email</label>
              <input type="email" placeholder="Email" name="emailM" required/> <br />
						<label>Sujet du message</label>
              <input type="text" placeholder="Sujet" name="sujetM" required/><br />
						<label>Message</label>
              <textarea rows="3" cols="50" type="text" placeholder="Message" name="messageM" required></textarea> <br/>
            <input type="submit" value="Envoyer" />
          </fieldset>
        </form>
       
   <?php include("./footer.php"); ?>        