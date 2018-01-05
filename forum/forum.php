<?php

require_once('connexion.php');
require ('header.php');
?>
<script src="../ckeditor/ckeditor.js"></script>	
<?php 	if(!isset($_GET['titre'])){ ?>

	
<fieldset class="fieldset">	
<legend><h2>Forum</h2></legend>
<img  class="forum" src="../Images/forum.jpg" alt="forum"/>
<p>Pour accéder au menu du forum...</p>
<a class="myButton" href= "menuForum.php">Cliquez ici</a></br>
<?php }
		
		/************************      AFFICHAGE TITRE ET COMMENTAIRES    *************************************/	
	
	
		
	if(isset($_GET['titre'])){
		$titre=html(rawurlencode($_GET['titre']));
		$requet = $bd->prepare('SELECT id FROM topic WHERE titre= :titre');
		$requet->bindValue(':titre', $titre);
		$requet->execute();
		$co=$requet->fetch(PDO::FETCH_ASSOC);
		$id_topic = $co['id'];
		if(empty($id_topic)) 
			header("Location:../erreur.php");
		
		
?>	<fieldset class="fieldset1">
		<legend>Forum</legend>
					<?php
						$titre = rawurldecode($titre);
						echo "<h1>".$titre.'</h1>';
					?>
						<hr width="100%" color="2a95be">
					<?php //Affichage Topic 						
						$req= $bd->prepare('SELECT id, contenu,id_auteur,DAY(date_creation) AS jour, MONTH(date_creation) AS mois, YEAR(date_creation) AS annee,HOUR(date_creation) AS heure, SECOND(date_creation) AS seconde, MINUTE(date_creation) AS minute FROM post WHERE id_topic = :id ORDER BY date_creation');// ID DESC LIMIT 0, 10 ');
						$req->bindValue(':id', $id_topic);
						$req->execute();
						
						//Affichage premier post
						$post = $req->fetch(PDO::FETCH_ASSOC);	
						
						//Req auteur topics
						$requete = $bd->prepare('SELECT login,photo FROM membre WHERE id=:id_auteur');
						$requete->bindValue(':id_auteur',$post['id_auteur']);
						$requete->execute();
						$auteur=$requete->fetch(PDO::FETCH_ASSOC);
												
						echo'
						<div class="flexcom">
							<div class="flexc1full">
								<img class="img_profil" src="'.$folder.'Images/membre/'.$auteur['photo'].'"/><br/>
								<b> '.$auteur['login'].'</b>
							</div>
							<div class="flexc2">
								Sujet de '.$auteur['login'].', 
								Posté le '.
										$post['jour'].'/'.$post['mois'].'/'.$post['annee'].' à '.
										$post['heure'].'h'.$post['minute'].'min'.$post['seconde'].'s
										<div class="flexc2"><p>'.$post['contenu'].'</br></p></div>
								<form method="post" action="'.$folder.'signaler.php">
									<input type="hidden" name="titre" value="Sujet du forum: '.$titre.'" />
									<input type="hidden" name="id" value= "'.$id_topic.'" />
									<input type="submit" name="signaler" value="Signaler"/>
								</form>
							</div>
						</div>
						<br/>
						<hr width="100%" color="7ad443">';
						
						
						//Affichage Posts
						while($ligne=$req->fetch(PDO::FETCH_ASSOC)){
							$id_com = $ligne['id'];
							//Requete auteur posts
							$r = $bd->prepare('SELECT login,photo FROM membre WHERE id=:idAuteur');
							$r->bindValue(':idAuteur', $ligne['id_auteur']);
							$r->execute();
							$li=$r->fetch(PDO::FETCH_ASSOC);
							
							echo '<div class="flexcom">
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
									<input type="hidden" name="titre" value="Commentaire du sujet: <?php echo $titre ?>" />
									<input type="hidden" name="id" value= "<?php echo $id_com ?>" />
									<input type="submit" name="signaler" value="Signaler"/>
								</form>
								<hr width="100%" color="7ad443">
					<?php								
							}	
								
						
					?>
				
			</fieldset>
			<br/>
			<h2>Commenter ce sujet:</h2>
			<hr width="15%" align="left" color="2a95be"/> 
				
		<?php 				
		if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
?>
		<form method="post" action="rajouteCom.php">
				<input type="hidden" name="id_topic" value="<?php echo $id_topic; ?>" />
				<input type="hidden" name="titre" value="<?php echo $titre; ?>" />	
				
				<textarea name="contenu" id="editor1" rows="20" cols="160"></textarea>
			  <script>
				 CKEDITOR.replace('editor1');
			  </script></br>
			   <input type="submit" value="Envoyer" />
				

				
		</form>
		
	
<?php
	}
else{ echo"</br></br><i>Veuillez vous connecter pour laisser un commentaire.</i>";
		?></br><a class="myButton" href= "../membre/index.php">Se connecter</a>

	
<?php
}
	}
	require('footer.php'); 
?>