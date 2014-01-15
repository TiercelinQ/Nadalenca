<h1>Nous contacter</h1>
<hr />
  <form method="post" action="./controlValidContact.php">
    <fieldset>
      <h3>Veuillez remplir ce formulaire pour nous contacter.</h3>
      <label>Nom</label><input type="text" placeholder="Nom" name="nomM" required/> <br />
      <label>Prénom</label><input type="text" placeholder="Prénom" name="prenomM" required/> <br />
      <label>Email</label><input type="email" placeholder="Email" name="emailM" required/> <br />
      <label>Sujet du message</label><input type="text" placeholder="Sujet" name="sujetM" required/><br />
      <label>Message</label><textarea rows="3" cols="50" type="text" placeholder="Message" name="messageM" required></textarea> <br/>
      <input type="submit" value="Envoyer" />
    </fieldset>
  </form>