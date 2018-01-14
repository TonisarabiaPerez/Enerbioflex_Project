<?php
require_once('connexion.php');
require('header.php');

	if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){
		if(!empty($_GET['erreur']))
			alertr("Veuillez remplir tous les champs.");
?>
<script src="../ckeditor/ckeditor.js"></script>	

	<fieldset class="fieldset">	
	<legend>Forum</legend>
   <h2>Créer votre sujet</h2> 
<hr width="100%" color="7ad443">


<form action="creation.php" method="post">
			
		<label class="titre" for="title">Sujet : </label><input type="text" name="sujet" id="title" required /><br /><br />
		
		<textarea name="contenu" id="editor1" rows="20" cols="155">
		</textarea>
			<script>
					CKEDITOR.replace('editor1');

			</script>
		<br/>
		<div class="boutonValider">
				<input type="submit" value="Créer" />
		</div>

</form>
<?php
	} 
	else header("Location: ../membre/index.php");

	require('footer.php');
?>