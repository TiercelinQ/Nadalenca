<h1>Gestion des concerts</h1>
<hr />

<form method="POST" action="./controlValidAddConcert.php">
	<fieldset>
			<label>Titre : </label><input type="text" name="titre" placeholder="Titre" required><br />
			<label>Date : </label><input type="date" name="date" placeholder="Date" required><br />
			<label>Heure : </label><input type="number" name="heure" placeholder="Heure" required><br />
			<label>Minute : </label><input type="number" name="minute" placeholder="Minute" required><br />
			<label>Lieu : </label><input type="text" name="lieu" placeholder="Lieu" required><br />
			<label>Adresse : </label><input type="text" name="adresse" placeholder="Adresse" required><br />
			<label>Ville : </label><input type="text" name="ville" placeholder="Ville" required><br />
			<input type="submit" value="Envoyer"><br />
		</fieldset>
</form>

<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>