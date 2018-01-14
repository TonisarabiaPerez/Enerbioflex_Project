<?php
require_once("connexion.php");
require("header.php");
?>
<script src="<?php echo $folder ?>ckeditor/ckeditor.js"></script>
<?php
/*********************************   MODIFIER UN ARTICLE   ******************************************/
	if(isset($_GET['titre'])){				
		$titre = html($_GET['titre']);
		echo 'Modifier mon article <h2>'.$titre.'</h2>';
		
		$req= $bd->prepare('SELECT id,titre,description,contenu,image FROM article WHERE titre = :titre');
		$req->bindValue(':titre', $titre);
		$req->execute();
		
		while($com=$req->fetch(PDO::FETCH_ASSOC)){ 
			$id=$com['id'];
		?>
		
			<form action="modificationArticle.php" method="post"> 
		      <p class="titre">Titre de l'article: <input type="text" name="titre" value="<?php echo $titre; ?>"required/></br></br>
		      Description: <input type="text" name="description" value="<?php echo $com['description']; ?>"required/></br></br></p>
			   </br></br></p>
			  <label for="contenu">Contenu</label><br/>
			  <textarea name="contenu" id="editor1" rows="20" cols="160">
				<?php echo $com['contenu'];  ?>
			  </textarea>
			  <script>
				 CKEDITOR.replace('editor1');
			  </script></br>
			  <input type="hidden" name="id" value="<?php echo $id; ?>" />

		      <p class="bouton"> <input type="submit" name="ok" value="Modifier"> </p>
  		    </form>	
			
			
<?php	}
	}
	

	else if(isset($_GET['supprimer']) && isset($_GET['t'])){
		$titre = html($_GET['t']);
?>			
		<form action="modificationArticle.php" method="post">
		  <p>Souhaitez-vous réellement supprimer l'article <h2>"<?php echo $titre; ?>"</h2></p></br>
<?php 
			$requ= $bd->prepare('SELECT description FROM article WHERE titre = :titre');
			$requ->bindValue(':titre', rawurlencode($titre));
			$requ->execute();
			
			$result=$requ->fetch(PDO::FETCH_ASSOC);
			echo '<i>'.$result['description'].'</i>';
		  
?>		  
		  <p class="bouton"> <input type="submit" name="annuler" value="Annuler">
	      <input type="submit" name="supprimer" value="Supprimer"> </p>
		  <input type="hidden" name="title" value="<?php echo $titre; ?>" />
		  <input type="hidden" name="idA" value="<?php echo $_SESSION['id']; ?>" />

		</form>
<?php
	}	
require("footer.php");
?>