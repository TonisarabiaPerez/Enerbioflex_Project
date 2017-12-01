<?php
require("header.php");
?>

<body>
<fieldset class="fieldset">
<legend>Recherche</legend>
<form id="searchForm" name="moteurSubmit" method="GET" action="">
	<!--<label for="q">Rechercher :</label>-->
	<input type="text" value="<?php if(isset($_GET['q'])) { echo htmlspecialchars($_GET['q']); } ?>" name="q" id="moteur" />
	<input type="submit" value="Rechercher" />
</form>
</br>
<fieldset class="fieldset">
<?php
include_once("connexion.php");
include_once("class.inc/BDD-PHP5.5.class-inc.php");
include_once("class.inc/stopwords.php");				// Liste des mots à exclure
include_once("class.inc/moteur-php5.5.class-inc.php"); // Class PHP 5.5

if(isset($_GET) && !empty($_GET['q'])) {
    $moteur = new moteurRecherche($bd, stripslashes($_GET['q']), 'article', 'regexp', $stopwords, '', 'utf-8', true, true);
    $colonnesWhere = array('titre');
    $moteur->moteurRequetes($colonnesWhere);
}

if(isset($moteur)) {
    // Affichage de la requête avec $moteur->requete
    echo '<h3>Résultats de la recherche : <em>'.$moteur->requete.'</em></h3>';

	// Création de la table des mots corrects
	if($moteur->isIndex("correctindex", "table_search") == false) {
		// Créé l'index correct
		$moteur->createIndex();
	}

	// Fonction d'affichage des résultats (callback appelé ensuite)	
	function display($requete, $nbResults, $mots) {

		if($nbResults == 0) { // Si aucun résultat n'est retourné
			echo "<p>Aucun résultat, veuillez effectuer une autre recherche !</p>";    
		} else { // Sinon on affiche les résultats en boucle
	 
			// Affichage du nombre de résultats (optionnel)
			// N.B. : important pour l'affichage de résultats suivants (class "numR") !!!
			$affichageResultats = new affichageResultats();
			echo $affichageResultats->nbResultats(true);
			
			// Instanciation des ID (et du numéro de résultat si besoin)
			$nb = 0;
			while(($key = mysqli_fetch_assoc($requete))) {
				$nb++; // Incrémentation de l'ID
				
				// On encode chaque clé/valeur de résultats en UTF-8
				foreach($key as $k => $v) {
					 $key[$k] = utf8_encode($v);
				}
				//print_r($requete);
				//print_r($key);

				// Résultats de recherche à afficher (à personnaliser)
				$texte  = "<div class='results' id='".$nb."'>\n";
				$texte .= '<h3><a href="articles.php?titre='. $key['titre'] .'">'.$nb.' - '.urldecode($key['titre']).'</a></h3>';
				
				// Affichage du contenu après surlignage des mots recherchés
				// N.B. : optionnel --> possibilité de remplacer par echo $texte;
				$surlignage = new surlignageMot($mots, $texte);
				echo $surlignage->contenu;
				
				echo "<p>".$key['description']."</p>\n";
				echo "</div>";
			} // Fin de la boucle while
		}
	} // Fin de la fonction display (callback)

	// Nombre de résultats par "tranche d'affichage"
	$limit = 20;
	
	// Lancement de la fonction d'affichage avec paramètres
	$moteur->moteurAffichage('display', '', array(true, 0, $limit, false));
	
	// Affichage de la zone de chargement
	echo '<div id="loadMore">Afficher plus de résultats...</div>';
}
?>
<script type="application/javascript">
jQuery(document).ready(function () {
	// Tableau des arguments optionnels (ici les valeurs par défaut)
	var args = {
		target: 'queryAjax-PHP5.5.php',				// Cible contenant le contenu à charger (boucle PHP/MySQL en général)
		limit: 5,									// Nombre de résultats à afficher par chargement
		nbResult: jQuery('.numR').text(),			// Nombre total de résultats (récupéré dynamiquement)
		duration: 300,								// Durée d'affichage de l'image de chargement (en ms) --> 0 pour annuler !
		classLast: '.results',						// Class des résultats affichés (obligatoire pour fonctionner !)
		loadImg: 'img/loadingBlue.gif',				// Image de chargement ('' pour ne pas afficher d'image)
		idImg: 'imgLoading',						// ID du bloc contenant l'image de chargement
		attrID: 'id',								// Attribut contenant le numéro du résultat affiché ('id' conseillé !)
		evt: 'click',								// Type d'événement Javascript pour lancer la fonction
	};
	
	// Options complémentaires (requête de recherche par exemple ici --> Totalement personnalisable !)
	var options = {
		q: '<?php if(isset($moteur->requeteCorrigee)) { echo $moteur->requeteCorrigee; } elseif(isset($_GET['q'])) { echo $_GET['q']; } ?>'
	};
	
	// Lancement de la fonction sur l'élément "Afficher plus"
	jQuery('#loadMore').ajaxTrigger(args, options);
});
</script>
<?php
require("footer.php"); ?>