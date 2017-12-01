<meta charset="utf-8"/>

<?php

try
{
	$bd = new PDO('mysql:charset=utf8mb4;host=localhost:3306;dbname=energiculteur','energiculteur','Enerbioflex2016');
	$bd->query('set names utf8');
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
	die('<p> <h1>ERREUR 500!</h1>Erreur : '.$e->getMessage().'</p>');
}

//echo "Connexion �tablie";

?>
