<h2>Choristes</h2>  
<hr />

<p>Vous désirez rejoindre « Nadalenca » allez dans la rubrique <a href="../Controleur/controlInscription.php">inscription</a> vous trouverez tous les renseignements utiles pour intégrer le chœur.</p>


<h2>Organisateurs de concerts, Associations, Chorales</h2>
<hr />

<p>Vous désirez accueillir « Nadalenca » pour un concert ou organiser un échange, vous pouvez nous contacter en utilisant les coordonnées ci-dessous, nous vous communiquerons les modalités.</p>

<h2>Coordonnées</h2>
<hr />

<h3>Siège social</h3>

<p>NADALENCA – </p> <?php $tuple['siegeSocialC']; //Chez Gérard Blanc, 13 Esplanade de l’Europe - 34000 MONTPELLIER  ?>
<p>Tél :</p> <?php $tuple['telfC'];  //04.67.65.23.15 ?>
<p>Portable :</p><?php $tuple['telfm'];  // 06.88.67.27.14. ?>

<h3>Adresse postale</h3>

<p>NADALENCA</p> <?php  $tuple['adressePostalC']; //  chez Gérard Blanc, 13 Esplanade de l’Europe - 34000 MONTPELLIER?>

<h3>Internet</h3>
<p>Courriel :</p> <?php $tuple['email']; //  nadalenca@free.fr?>
<p>Site internet : <a href="#">ASSOCIATION NADALENCA</a></p><br />


<h1>Nous contacter</h1>
<hr />


  <form method="post" action="./controlValidContact.php">
    <fieldset>
      <h3>Veuillez remplir ce formulaire pour nous contacter.</h3>
      <label>Nom</label><input type="text" placeholder="Nom" name="nomM" required/> <br />
      <label>Prénom</label><input type="text" placeholder="Prénom" name="prenomM" required/> <br />
      <label>Email</label><input type="email" placeholder="Email" name="emailM" required/> <br />
      <label>Sujet du message</label><input type="text" placeholder="Sujet" name="sujetM" required/><br />
      <label>Message</label>
        <textarea rows="3" cols="50" type="text" placeholder="Message" name="messageM" required></textarea> <br/>
      <input type="submit" value="Envoyer" />
    </fieldset>
  </form>