<?php require_once("connexion.php");
session_start();
if(isset($_POST['titre']) && trim($_POST['titre'])!='' && isset($_POST['contenu']) && trim($_POST['contenu'])!='' && isset($_POST['description']) && trim($_POST['description'])!=''){
	
	//Traitement du fichier
	
	if(($_FILES['photo']['error'])!=0){
		header('Location: creerArticle.php?erreur=1&photo=1' );
	}
	if( ($_FILES['photo']['type']!= "image/gif") && ($_FILES['photo']['type']!= "image/jpeg") && ($_FILES['photo']['type']!= "image/png") ){
		header('Location: creerArticle.php?erreur=1&format=1' );
	}
		   

	
	//Traitement des données si fichier valide
	
	
	
	$uploaddir = '../Images/userFile/';
	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

	//on verifie si le fichier existe déjà
	
	
	$filen = '../Images/userFile/';
	$filename = $filen . $_FILES["photo"]["name"];
	while (file_exists($filename)) {
		$_FILES["photo"]["name"]= '_'.$_FILES["photo"]["name"];
		$filename = $filen . $_FILES["photo"]["name"];
	} 
	
	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

	
	if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile))
		header('Location: creerArticle.php?erreur=1&photo=1' );  
		   
	
	$titre=htmlspecialchars(trim($_POST['titre']),ENT_QUOTES);
	$contenu=$_POST['contenu'];
	$description=$_POST['description'];
	$photo=$_FILES["photo"]["name"];

	
	$req=$bd->prepare('INSERT INTO article(id_auteur,titre,description,contenu,image,date_creation,date_modification) VALUES(:res,:titre,:desc,:contenu,:img,:date,:date)');
	$req->bindValue(':res', $_SESSION['id']);
	$req->bindValue(':titre', $titre);
	$req->bindValue(':desc', $description);
	$req->bindValue(':contenu', $contenu);
	$req->bindValue(':img', $photo);
	$req->bindValue(':date', date("Y-m-d H:i:s"));

	$req->execute();
		
	header('Location: articles.php?titre='.rawurlencode($titre) );
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
else{
	header('Location: ../erreur.php');
}
?>