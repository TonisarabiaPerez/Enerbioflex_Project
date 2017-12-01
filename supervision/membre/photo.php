<?php

//Traitement du fichier photo
function testPhoto($uploaddir){
	
	//print_r($_FILES["photo"]);
	
	//TODO : Ecrire la condition d'erreur sur la photo
	
	//Traitement des données si fichier valide
	
	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

	//on verifie si le fichier existe déjà
	
	$filename = $uploaddir . $_FILES["photo"]["name"];
	while (file_exists($filename)) {
		$_FILES["photo"]["name"]= '_'.$_FILES["photo"]["name"];
		$filename = $filen . $_FILES["photo"]["name"];
	} 
	
	$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
	
	if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) 
		return true;
	else
		return false; 
}