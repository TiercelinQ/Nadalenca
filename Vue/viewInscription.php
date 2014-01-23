<h1>Pour s'inscrire</h1>
<hr />

<p>Le chœur polyphonique Occitan « Nadalenca » recrute des nouveaux choristes. L’admission dans le chœur peut se faire toute l’année, mais 2 périodes sont plus favorables : En septembre au moment de la reprise des répétitions sur le répertoire « Nadalets » et au mois de Janvier lors du démarrage du travail sur le répertoire « Traditionnel et Classique ».</p>

<h2>Modalités - Conditions</h2>

<p>Nadalenca recrute des personnes ayant une pratique du chant choral ou montrant une réelle motivation pour l’apprentissage des partitions et l’acquisition d’une technique vocale. Il n’est cependant pas nécessaire de savoir déchiffrer la musique.</p>

<p>En ce qui concerne la langue Occitane : Chanter en occitan n’est pas plus difficile que de chanter en Allemand, en Latin ou en Italien,…. Il n’est donc pas nécessaire de maîtriser cette langue, par contre chanter à Nadalenca permet d’acquérir des rudiments de l’Occitan par un apprentissage plus ludique. Bien sur un intérêt pour la langue Occitane et la culture régionale renforcent le plaisir de chanter à « Nadalenca ».</p>

<p>La cotisation annuelle 2013 est fixée à 130€ , comprenant l’adhésion à l’association, les photocopies et supports CD audio de travail, et l’inscription aux cours de technique vocales.</p>


<h2>Inscription</h2>
<hr />
	<form name = "forminscrip" method="POST" action="./controlValidInscription.php" onSubmit="return verifMDP();">
		<fieldset>
		<h3>Veuillez remplir le formulaire d'inscription</h3>
			<label>Nom : </label><input type="text" name="nom" placeholder="Nom" required><br />
			<label>Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required><br />
			<label>Email : </label><input type="email" name="email" placeholder="Email" required><br />
			<label>Mot de passe : </label><input type="password" name="mdp" required><br />
			<label>Confirmation du mot de passe : </label><input type="password" name="mdpc" required><br />
			<label>Mot de passe Nadalenca* : </label><input type="password" name="mdpn" required><br />
			<input type="submit" value="Envoyer">
			<p>(*)Pour obtenir le mot de passe Nadalenca, veuillez contacter le président de l'association.</p>
		</fieldset>
	</form>
<?php

		