<?php
	session_start();
	require_once("connexion.php");
?>
<?php


if(isset($_POST['contenu']) && trim($_POST['contenu'])!='' ){
	
	if(!empty($_SESSION['id']) && !empty($_SESSION['jeton'])){ 
	
		$req = $bd->prepare('INSERT INTO post(id_topic,id_auteur,contenu,date_creation) VALUES(:c,:res,:post,:date)');
		$req->bindValue(':c', $_POST['id_topic']);
		$req->bindValue(':res', $_SESSION['id']);
		$req->bindValue(':post', $_POST['contenu']);
		$req->bindValue(':date', date("Y-m-d H:i:s"));

		$req->execute();
	}
	
	else
		 header("Location:\PHP\EBFX\membre\index.php");

}
	header('Location:forum.php?titre='.$_POST['titre']);
?>