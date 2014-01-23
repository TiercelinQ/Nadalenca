<h1>Recherche d'un répertoire</h1>
<hr />

	<form method="post" action="./controlRepertoireRecherche.php">
		<fieldset>
			<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br /><!-- Fonction de recherche dans le répertoire-->
				<input type="submit" value="Ok" /><br />
		</fieldset>
	</form>
<?php
//Affichages des morceaux disponibles dans le repertoire
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );

echo "<h3>Liste des morceaux</h3>
			<ul> ";
//Affichage sous forme de liste
while ($tuple = mysql_fetch_array($res))
{
	echo " <li>"; 
	echo "<a href="."../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']. ">".$tuple['nom']."</a></li>";
}
	echo "</ul>";
?>

	<h2>Explication</h2>
	<hr />

<p>Le choeur alterne deux répertoires : un répertoire de Noël (Nadalets) donné en concerts dans la période des fêtes de fin d’année, et un répertoire mêlant chants traditionnels et œuvres classiques présenté le reste de l‘année.</p>

<p>Les Nadalets sont des chants de Noël Traditionnels du pays d’OC, chantés à la veillée ou sur les chemins menant à l’église, du Languedoc à la Provence, du Béarn au Limousin ou à l’Auvergne. Souvent anonymes et adaptés sur des airs populaires, ils étaient un expression simple de la foi, on y retrouve l’imagination héritée de la crèche. </p>

<p>Les premières polyphonies sur des « Nadalets » interprétées par « Nadalenca » sont l’oeuvre chanoine Joseph Roucairol archiprêtre de la cathédrale St Pierre de Montpellier et figure incontournable de la musique àMontpellier (Sonatz Campanetas, Nadal de Pesenas, Nadal tindaire,…).</p>

<p>Plus récemment, Isabelle CHAUVALLON (Professeur au conservatoire de Montpellier), Denis ALLEMAND (Professeur de musique à l’Education Nationale) et Françoise VEINTURIER (Professeur au conservatoire de Béziers) ont réalisé de nombreuses harmonisations pour la chorale (Plus de 50 nouveaux morceaux  dont certains ont fait l’objet d’une publication)</p>

<p>En complétant d’année en année son répertoire avec de nouvelles harmonisations, Nadalenca participe à l’enrichissement du patrimoine choral en Occitan ainsi qu’à sa diffusion auprès des autres chœurs et du public.</p>

	<h2>Le saviez-vous ?</h2>
	<hr />

	<div id="saviezvous">
	<p>Si les premiers Nadalets remontent au XIIème siècle, la période de production la plus prolifique est le XVIIème siècle avec Nicolas Saboly (1615-1675) : Pastres, pastressas, Per non languir,  Son très omes savis, Lei pastoreus, La camba me fai mal, … et la chapelle pontificale Notre Dame des Doms en Avignon (1580-1610) : Un angel del cel es vengut, Avetz ausit, Aquestanuech, Vautres que siàtzs assemblats, … D’autres Noël nous proviennent d’autres contrées Occitanes tel que La terra es freja (Bas Limousin) ou Dejos una teulada (Languedoc).</p>

	<p>Encore aujourd’hui de nouveaux Noëls sont composés, entre autres, par Joan Larzac  à l’occasion du Noël Occitan de Montpellier : Un nòu, nòu, nòu (1999)  Messatgièrs de patz (1989) , Lo Nadalet de Salinelas (1991), Cantem Nadal, detras la nuòch ! … (2006) </p>
	</div>
