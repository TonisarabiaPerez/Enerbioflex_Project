<?php
require_once('connexion.php');
require('header.php');
//require($folder.'function.php');
?>
<script src="../ckeditor/ckeditor.js"></script>
<?php

		if(isset($_GET['erreur'])){
	
			if(isset($_GET['titre'])){
				$err = "Veuillez saisir un Titre";
			}
			else if(isset($_GET['contenu'])){
				$err = "Veuillez saisir un Contenu";
			}
			else if(isset($_GET['description'])){
				$err = "Veuillez saisir une Description";
			}
			else if(isset($_GET['photo'])){
				$err = "Veuillez choisir une Photo";
			}
			else if(isset($_GET['format'])) {
				$err = "Le format de votre photo doit être .jpeg, .gif ou .png";
			}
			alertr($err);
		}

	if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
?>

	<fieldset class="fieldset">	
	<legend>Articles</legend>
    <h2>Créer votre article</h2> 
	<hr width="100%" color="7ad443"/>

   	    <form enctype="multipart/form-data" action="creationArticle.php" method="post"> 
		      <p class="titre">Titre de l'article: <input type="text" name="titre" required /></br></br>
		      Description: <input type="text" name="description" required /></br></br></p>
			  <p class="photo">Choisissez une photo avec une taille inférieure à 2 Mo. </br>
				<input type="hidden" name="MAX_FILE_SIZE" value="2048576" />
		      <input type="file" name="photo" /> </br></br></p>
		
		
			 <label for="contenu">Contenu</label><br/>
			  <textarea name="contenu" id="editor1" rows="20" cols="160">
			  </textarea>
			  <script>
				 CKEDITOR.replace('editor1');
			  </script></br>
		     <p class="boutton"> <input type="submit" name="ok" value="Créer"> </p>
  		</form>

   <a class="retour" href="menuArticle.php" > < Revenir au menu des articles </a></br>

<?php
	} 
	else 
		header('Location:'.$folder.'membre\index.php');	

require("footer.php");
?>
