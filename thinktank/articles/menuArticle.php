<?php
require_once("connexion.php");
require("header.php");
?>
 
 <link rel="stylesheet" type="text/css" href="<?php echo $folder ?>articles.css">

<fieldset class="fieldset">
<legend>Articles</legend>
	<h1>Menu articles</h1>
	<section class="blocMA">
	<a href="demandeTitre.php">Modifier mon article</a></br></br>
	<a href="demandeSuppression.php">Supprimer mon article</a></br></br>
	<a href="recherche.php">Rechercher un article</a></br></br>

	<fieldset class="fieldset">
	<legend>Liste des sujets existants</legend>

<table>
<?php
$articles=$bd->prepare('SELECT * FROM article ORDER BY date_creation DESC');
$articles->execute();

while($ligne=$articles->fetch(PDO::FETCH_ASSOC)){ 
	echo '<tr><td><a href="articles.php?titre='. rawurlencode($ligne['titre']).'">' . urldecode($ligne['titre']) . '</a></td>
	<td></td>
	</tr>';			
}
?>
</table></section>

	<fieldset class="fieldset">
	<legend>Créer un nouvel article</legend>
	<a class="myButton" href="creerArticle.php">+ Nouvel article</a>

<?php
require("footer.php"); ?>