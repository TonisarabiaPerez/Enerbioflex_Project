
<?php session_start(); ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=bdd_mess;charset=utf8", $username, $password);
    	// Créer une exception en cas d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	//echo "Connected successfully";
 }
catch(PDOException $e){
    echo "Echec lors de la connexion: " . $e->getMessage();
}
?>

