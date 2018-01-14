<?php 
require_once("connexion.php");
require("header.php");

if(isset($_POST['contenu']) && trim($_POST['contenu'])!='' ){
	
	if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
	
		$req = $bd->prepare('INSERT INTO commentaire(id_article,id_auteur,contenu,date) VALUES(:c,:res,:post,:date)');
		$req->bindValue(':c', $_POST['id_article']);
		$req->bindValue(':res', $_SESSION['id']);
		$req->bindValue(':post', $_POST['contenu']);
		$req->bindValue(':date', date("Y-m-d H:i:s"));

		$req->execute();
	}

	else
		 header("Location:\PHP\EBFX\membre\index.php");

}
	header('Location:articles.php?titre='.rawurlencode($_POST['titre']));


	?>