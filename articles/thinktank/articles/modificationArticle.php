<?php
session_start();
require_once("connexion.php");
?>

<?php

	if(isset($_POST['titre']) && trim($_POST['titre'])!='' && isset($_POST['contenu']) && trim($_POST['contenu'])!='' && isset($_POST['description']) && trim($_POST['description'])!=''){
		
				$titre=$_POST['titre'];
				$contenu=$_POST['contenu'];
				$description=$_POST['description'];
				
				$prendre=$bd->prepare('SELECT date_creation FROM article WHERE id= :num');
				$prendre->bindValue(':num', $_POST['id']);
				$prendre->execute();
				
				
				while($resultat=$prendre->fetch(PDO::FETCH_ASSOC)){ 
					$dateCreation=$resultat['date_creation'];
				}

				$req=$bd->prepare('UPDATE article SET titre=:titre,description=:desc,contenu=:contenu,date_creation=:datec,date_modification=:datem where id=:i');
				$req->bindValue(':i', $_POST['id']);
				$req->bindValue(':titre', $titre);
				$req->bindValue(':desc', $description);
				$req->bindValue(':contenu', $contenu);
				$req->bindValue(':datec', $dateCreation);
				$req->bindValue(':datem', date("Y-m-d H:i:s"));

				$req->execute();
				
				
				header('Location: articles.php?titre='.$titre );
	}
	else if (isset($_POST['annuler']))
	{
		header('Location: menuArticle.php' );
	}
	else if (isset($_POST['supprimer'])){
		$r=$bd->prepare('SELECT id,id_auteur FROM article WHERE titre=:title');
		$r->bindValue(':title', $_POST['title']);
		$r->execute();
		
		$result = $r->fetch(PDO::FETCH_ASSOC);
		
		if ($result['id_auteur'] == $_SESSION['id']) {
			$r=$bd->prepare('DELETE FROM article WHERE titre=:title');
			$r->bindValue(':title', $_POST['title']);
			$r->execute();	
			
			$r=$bd->prepare('DELETE FROM commentaire WHERE id_article=:o');
			$r->bindValue(':o', $result['id']);
			$r->execute();
			
			header('Location: menuArticle.php' );
		} else {
			header('Location: '.$folder.'erreur.php');
		}

	}

	else if(!isset($_POST['titre']) || trim($_POST['titre'])==''){
			header('Location: creerArticle.php?erreur=1&titre=1' );
	}
	else if(!isset($_POST['contenu']) || trim($_POST['contenu'])==''){
			header('Location: creerArticle.php?erreur=1&contenu=1' );
	}
	else if(!isset($_POST['description']) || trim($_POST['description'])==''){
			header('Location: creerArticle.php?erreur=1&description=1' );
	}
	else if(!isset($_POST['photo']) || trim($_POST['photo'])==''){
			header('Location: creerArticle.php?erreur=1&photo=1' );
	}
	else
		echo "Erreur";
?>