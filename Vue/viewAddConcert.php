<form method="POST" action="./controlValidAddConcert.php">
					<fieldset>
						<legend>Formulaire d'ajout de concert</legend>
							<label>Titre : </label><input type="text" name="titre" placeholder="titre" required>
							<label>Date : </label><input type="date" name="date" placeholder="date" required><br />
							<label>Heure : </label><input type="number" name="heure" placeholder="heure" required>
							<label>Minute : </label><input type="number" name="minute" placeholder="minute" required><br />
							<label>Lieu : </label><input type="text" name="lieu" placeholder="lieu" required>
							<label>Adresse : </label><input type="text" name="adresse" placeholder="adresse" required><br />
							<label>Ville : </label><input type="text" name="ville" placeholder="ville" required>
							<input type="submit" value="Envoyer">
					</fieldset>
				</form>