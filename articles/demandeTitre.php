<?php
require_once("connexion.php");
require("header.php");
?>

	
<?php  if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ ?>
	
			<h2>Choisissez l'article que vous souhaitez modifier : </h2>
<?php		$req= $bd->prepare('SELECT titre FROM article WHERE id_auteur = :id');
			$req->bindValue(':id', $_SESSION['id']);
			$req->execute();			
									
			while($ligne=$req->fetch(PDO::FETCH_ASSOC)){
				echo '<a href="modifierArticle.php?titre='.$ligne['titre'].'">'.rawurldecode($ligne['titre']) .'</a></br>';

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