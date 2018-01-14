<?php
require_once("connexion.php");
require("header.php");
?>

	
<?php  if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
	
			?>
	
			<h2>Choisissez l'article que vous souhaitez définitivement supprimer : </h2>
<?php		$re= $bd->prepare('SELECT titre FROM article WHERE id_auteur = :id');
			$re->bindValue(':id', $_SESSION['id']);
			$re->execute();			
									
			while($li=$re->fetch(PDO::FETCH_ASSOC)){
				echo '<a href="modifierArticle.php?supprimer=1&t='.$li['titre'].'">'.rawurldecode($li['titre']) .'</a></br>';

			}
		}
		
		
		else{
			?>
			<i>Veuillez vous connecter pour modifier votre article</i>
			</br><a class="myButton" href= "../membre/index.php">Se connecter</a>
			<hr width="100%" color="7ad443"> 
<?php	}

  require("footer.php");
?>