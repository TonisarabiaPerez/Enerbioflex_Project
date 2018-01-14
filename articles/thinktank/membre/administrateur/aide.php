<?php session_start();
include('header.php');
include('menu.php');
?>
<div id="principal">
	<div id="titre_principal"><a name="Menu">Menu Aide</a></div>
	<div align="center"><br />
    	<a href="#smiley">Information importante sur les images</a><br/>
    	<a href="#pageMembre">Créer une page</a><br />
        <a href="#infoMembre">Afficher les informations du membre</a><br />
        <br />
    </div>
</div>

<div>
	<h3><i><< Un grand pouvoir implique de grandes responsabilités >></i></h3>
	Il est conseillé de n'utiliser le compte Administrateur que pour un but <i>administratif</i> et de vous créer un compte Modérateur pour intéragir avec les autres membres.<br/>
	Certaines fonctions peuvent avoir de grandes répercutions sur le site, tandis que d'autres ne vous sont pas accessibles (un Admin ne peut pas lancer une visio, par exemple).<br/>
	Veuillez réflechir à deux fois avant de valider une action.
</div>


<div>
	<h2><a name="smiley">Information Importante sur les images du sites</a></h2> 
	Les images du site, ormis les logos d'Enerbioflex, sont sous licence Creative Commons  Partage dans les Mêmes Conditions 2.0 Générique (CC BY-SA 2.0) <a href="https://creativecommons.org/licenses/by-sa/2.0/deed.fr" target="_blank"> (lire la licence).</a> Elles peuvent donc être partagées, réutilisées, adaptées selon les besoins et republiées tant que les termes de cette licence sont appliqués.<br/><br/>
	
	Les Smiley Tux G1 sont sous licence LGPL <a href="http://www.gnu.org/licenses/lgpl.html" target="_blank">(lire la licence)</a><br>
	<br>

Les Smiley Tux G2 sont sous licence Creative Commons by-nc-sa <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.fr" target="_blank">(lire la licence)</a>.   Cette licence a &eacute;t&eacute; choisie afin de prot&eacute;ger le travail des auteurs de   Tux G2 des abus de certaines entreprises. Cependant, chacune des   conditions peut &ecirc;tre lev&eacute;e si vous obtenez l'autorisation de l'auteur ET   de CrystalXP. Le Tux G2 de base a &eacute;t&eacute; con&ccedil;u/cr&eacute;&eacute;/r&eacute;alis&eacute; par Overlord59   de l'&eacute;quipe CrystalXP.net. <br>
<br>



<center><a href="#Menu" class="input">&nbsp;Retour au menu de l'aide&nbsp;</a></center>
</div>

<div>
	<h2><a name="pageMembre">Création d'une Page</a></h2>
	Pour créer une page du site, copiez le dossier "new" et modifiez le fichier "new.php". Des connaissances basiques en HTML suffisent à créer une page simple ou un onglet de l'espace membre, mais des connaissances plus approfondies en PHP, MySQL, HTML et CSS sont cependant nécessaire pour créer une page plus complexe. Pour ce dernier cas, les fichiers de bases sont déjà inclus
Pour que vous puissiez utiliser les fonctions et que l'espace membre reste sécurisé, la nouvelle page que vous allez créer pour l'espace membre doit &ecirc;tre une page php, exemple: (nouvelle_page.php), et vous devez la placer dans le dossier membre.<br /><br />
<div class="bouton">Premiére étape</div><br /><br />
Dans le fichier membre, ouvrez la page menu.php avec éditeur php ou avec le bloc-notes.<br />
Vous trouverez la partie suivante :<br />
<textarea cols="80" rows="6">
// debut du menu
echo '<a href="index.php" class="bouton">Accueil</a>
<a href="messagerie.php" class="bouton">Messagerie</a>
<a href="profil.php" class="bouton">Profil</a>
<a href="'.URLSITE.'/deconnexion.php" class="bouton">Déconnexion</a>';
// fin du menu
</textarea><br />
C'est dans cette partie que vous devez rajouter le lien de votre nouvelle page.<br />
Voici ce que vous devez ajouter :<br />
<input type="text" value='<a href="lien_de_page.php" class="bouton">Nom_de_page</a>' size="80"><br />
Voici un exemple d'ajout d'une nouvelle page : <br />
<textarea cols="80" rows="7">
// debut du menu
echo '<a href="index.php" class="bouton">Accueil</a>
<a href="messagerie.php" class="bouton">Messagerie</a>
<a href="profil.php" class="bouton">Profil</a>
<a href="lien_de_page.php" class="bouton">Nom_de_page</a>
<a href="'.URLSITE.'/deconnexion.php" class="bouton">Déconnexion</a>';
// fin du menu
</textarea><br /><br />
<div class="bouton">Deuxiéme étape</div><br /><br />
Pour commencer la cr&eacute;ation de votre page, copier et collez le code ci-dessous dans votre nouvelle page.<br />
<textarea cols="80" rows="8">
&lt;?php session_start();
include('header.php');
include('menu.php');
?&gt;

&lt;?php
include('footer.php');
?&gt;
</textarea><br />
<a href="exemple.php" target="_blank">Voir le resultat</a><br /><br />
Pour ajouter le cadre principal copiez et collez le code suivant :<br />
<input type="text" value='<div id="principal">Votre texte ici</div>' size="80"><br />
Voici comment :<br />
<textarea cols="80" rows="8">
&lt;?php session_start();
include('header.php');
include('menu.php');
?&gt;
&lt;div id="principal"&gt;Votre texte ici&lt;/div&gt;
&lt;?php
include('footer.php');
?&gt;
</textarea><br />
<a href="exemple1.php" target="_blank">Voir le resultat</a><br /><br />
Pour ajouter un titre a votre cadre principal copiez et collez le code suivant :<br />
<input type="text" value='<div id="titre_principal">Le titre</div>' size="80"><br />
Voici comment :<br />
<textarea cols="80" rows="10">
&lt;?php session_start();
include('header.php');
include('menu.php');
?&gt;
&lt;div id="principal"&gt;
&lt;div id="titre_principal"&gt;Le titre&lt;/div&gt;
Votre texte ici&lt;/div&gt;
&lt;?php
include('footer.php');
?&gt;
</textarea><br />
<a href="exemple2.php" target="_blank">Voir le resultat</a><br /><br />
Vous pouvez cr&eacute;er plusieurs cadres, voici un exemple :<br />
<textarea cols="80" rows="15">
&lt;?php session_start();
include('header.php');
include('menu.php');
?&gt;
&lt;div id="principal"&gt;
&lt;div id="titre_principal"&gt;Le titre&lt;/div&gt;
Votre texte ici&lt;/div&gt;

&lt;div id="principal"&gt;
&lt;div id="titre_principal"&gt;Le titre&lt;/div&gt;
Votre texte ici&lt;/div&gt;

&lt;?php
include('footer.php');
?&gt;
</textarea><br />
<a href="exemple3.php" target="_blank">Voir le resultat</a><br /><br />
<center><a href="#Menu" class="input">&nbsp;Retour au menu de l'aide&nbsp;</a></center>
</div>

<div>
<h2><a name="infoMembre">Afficher les Informations du Membre</a></h2>
Sur une page de l'espace membre vohus pouvez afficher les information de celui qui la consulte, en utilisant une classe ainsi qu'une fonction le tout en php.<br />
Voici le code a utiliser, choisissez suivant vos besoin : 
<ol>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'nom'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'prenom'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'civilité'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'login'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'mail'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'date_naissance'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'adresse'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'pays'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'ville'); ?&gt;" size="60"></li>
<li><input type="text" value="&lt;?php echo Membre::info($_SESSION['id'], 'description'); ?&gt;" size="60"></li>
</ol>
<center><a href="#Menu" class="input">&nbsp;Retour au menu de l'aide&nbsp;</a></center>
</div>

<?php
include('footer.php');
?>















