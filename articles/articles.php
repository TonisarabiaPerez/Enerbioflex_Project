<?php
require("header.php");
require_once("connexion.php");

?>

<?php 	if(!isset($_GET['titre'])){	?>

<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>articles.css">

		<fieldset class="fieldset">	
		<legend><h2>Articles</h2></legend>
			<img  class="article" src="../Images/articles.jpg" alt="article"/>
			<p>Pour accéder au menu des articles...</p>
			<a class="myButton" href= "menuArticle.php">Cliquez ici</a></br>
			
<?php 
		/************************      AFFICHAGE TITRE ET COMMENTAIRES    *************************************/	
		
	}if(isset($_GET['titre'])){
		$titre=html($_GET['titre']);
		
		//Verifie si l'article existe
		$requet = $bd->prepare('SELECT id,id_auteur FROM article WHERE titre= :titre');
		$requet->bindValue(':titre',$titre);
		$requet->execute();
		$ids=$requet->fetch(PDO::FETCH_ASSOC);
		$id_article=$ids['id'];
		if(empty($id_article)) {
			header("Location:../erreur.php");
			exit();
		}
		$id_auteur=$ids['id_auteur'];

		//Req article
		$requete = $bd->prepare('SELECT contenu,image, date_creation, date_modification FROM article WHERE titre= :titre');
		$requete->bindValue(':titre', $titre);
		$requete->execute();
		
		//Req auteur article
		$req = $bd->prepare('SELECT login,photo FROM membre WHERE id=:id_auteur');
		$req->bindValue(':id_auteur',$id_auteur);
		$req->execute();
		$auteur=$req->fetch(PDO::FETCH_ASSOC);
		
		?>
		
<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>afficheArticle.css">
<script src="<?php echo $folder ?>ckeditor/ckeditor.js"></script>

		<section class="blocA">
			<fieldset class="fieldset">	
				<legend>Articles</legend>
		<?php
		$titre = rawurldecode($titre);
		echo "<h1>".$titre."</h1>";
		?>
		
		<hr width="100%" color="7ad443">
		
		<?php 		
		$com=$requete->fetch(PDO::FETCH_ASSOC);
		if (empty($com['image']) || $com['image']=='_') $com['image'] = 'blank.jpg';
			
			echo' 
			<div class="article">'.
				$com['contenu'].'</br></br></br>
				<img class="img_article" src="'.$folder.'Images/userFile/'.$com['image'].'"/><br/>
				
				<div class="flexcom">
					<div class="flexc1full">
						<img class="img_profil" src="'.$folder.'Images/membre/'.$auteur['photo'].'"/>
					</div>
					<div class="flexc2">
						Article de '.$auteur['login'].',<br/>
						Posté le '.$com['date_creation'].'.<br/>
						Dernière modification le '.$com['date_modification'].'<br/>
						<form method="post" action="'.$folder.'signaler.php">
							<input type="hidden" name="titre" value="Article: '.$titre.'" />
							<input type="hidden" name="id" value= "'.$id_article.'" />
							<input type="submit" name="signaler" value="Signaler l\'article"/>
						</form>
					</div>
				</div>
			</div>';
			?>
			<hr width="100%" color="2a95be"/>
			<h2> Commentaires </h2>
			<?php 

			if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
				
				//Req commentaire
				$req= $bd->prepare('SELECT id, id_article,id_auteur,contenu,DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS annee,HOUR(date) AS heure, SECOND(date) AS seconde, MINUTE(date) AS minute FROM commentaire WHERE id_article = :id ORDER BY date desc'); //ID DESC LIMIT 0, 10 ');
				$req->bindValue(':id', $id_article);
				$req->execute();
					
				while($ligne=$req->fetch(PDO::FETCH_ASSOC)){
					$id_com = $ligne['id'];
					//Req auteur commentaire
					$r = $bd->prepare('SELECT login,photo FROM membre WHERE id=:idAuteur');
					$r->bindValue(':idAuteur', $ligne['id_auteur']);
					$r->execute();
					$li=$r->fetch(PDO::FETCH_ASSOC);
					
			?>
					<hr width="100%" color="7ad443">
			<?php
				
					echo '
					<div class="flexcom">
						<div class= "flexc1">
							<img class="img_membre" src="../Images/membre/'.$li['photo'].'" alt="avatar"/></br>'.$li['login'].'
						</div>						
						<div class="flexc2full"><b>'.$titre.'</b>, le '.
							$ligne['jour'].'/'.$ligne['mois'].'/'.$ligne['annee'].' à '.
							$ligne['heure'].'h'.$ligne['minute'].'min'.$ligne['seconde'].'s
							<div class="flexc2"><p>'.$ligne['contenu'].'</br></p></div>
						</div>
					</div>';
				
						
						?>
						<form method="post" action="<?php echo $folder ?>signaler.php">
							<input type="hidden" name="titre" value="Commentaire de l'article: <?php echo $titre ?>" />
							<input type="hidden" name="id" value= "<?php echo $id_com ?>" />
							<input type="submit" name="signaler" value="Signaler"/>
						</form>
						
						
						<?php
							
				}	
		
	  ?>
				  </section>
			<br/>
			<h2>Commenter cet article</h2>
			<hr width="15%" align="left" color="2a95be"/> 
		
			<form method="post" action="rajouteComArticle.php">
				<input type="hidden" name="id_article" value="<?php echo $id_article; ?>" />
				<input type="hidden" name="titre" value="<?php echo $titre; ?>" />

				<textarea name="contenu" id="editor1" rows="20" cols="160"></textarea>
			  <script>
				 CKEDITOR.replace('editor1');
			  </script></br>
			   <p class="boutton"> <input type="submit" name="ok" value="Ajouter"> </p>

				
			</form>
			<a href="#">Haut de page</a>
<?php
			}else{
?>
				<i>Vous devez être connecté pour commenter cet article</i>
				</br><a class="myButton"; href= "../membre/index.php">Se connecter</a>
				<hr width="100%" color="7ad443">
				<?php
			}			
			
		
	}

	
	require("footer.php");
 ?>