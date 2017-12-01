<?php
try
{
	$bd = new PDO('mysql:charset=utf8mb4;energiculteur.fr','energiculteur', 'EnerBIOflex2016');
	$bd->query('set names utf8');
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$bd->query('USE table_donnees');
	
}

catch (PDOException $e)
{
	die('<p> <h1>ÉCHOUÉ!</h1>'.'Le plan à échoué. <br/>Erreur : '.$e->getMessage().'</p>');
}
?>

