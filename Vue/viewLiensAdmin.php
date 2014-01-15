<form method="POST" action="./controlAddLiens.php">
					<fieldset>
						<legend>Ajouter un lien</legend>
							<label>Adresse : </label><input type="url" name="lien" value="http://" required>
							<label>Description : </label><input type="text" name="description" placeholder="Description" required>
								<input type="submit" value="Ajouter">	<br />
					</fieldset>
</form>