<?php  require_once("connexion.php");
require('../function.php');

		/********************   Insertion sujet dans BDD et affichage conversation    ********************************/	

session_start();		
		
if(isset($_POST['sujet']) && trim($_POST['sujet'])!='' && isset($_POST['contenu']) && trim($_POST['contenu'])!=''){
		
		$sujet=html(rawurlencode($_POST['sujet']));
			
		echo 'Sujet = '.$sujet;		
		
		$req = $bd->prepare('INSERT INTO topic(id_forum,id_auteur,titre,date_creation) VALUES(1,:res,:post,:date)');
		$req->bindValue(':res', $_SESSION['id']);
		$req->bindValue(':post', $sujet);
		$req->bindValue(':date', date("Y-m-d H:i:s"));

		$req->execute();
		
		
		$r=$bd->prepare('SELECT id from topic where titre = :su');
		$r->bindValue(':su', $sujet);
		$r->execute();
		while($re=$r->fetch(PDO::FETCH_ASSOC)){
			$i=$re['id'];
			$re=$bd->prepare('INSERT INTO post(id_topic,id_auteur,contenu,date_creation) VALUES(:t,:a,:c,:d)');
			$re->bindValue(':t', $i);
			$re->bindValue(':a', $_SESSION['id']);
			$re->bindValue(':c', $_POST['contenu']);
			$re->bindValue(':d', date("Y-m-d H:i:s"));

			$re->execute();
					
		}
		
		header('Location: forum.php?titre='.$sujet );
}	

else{
	header('Location: creerSujet.php?erreur=1');
}

?>