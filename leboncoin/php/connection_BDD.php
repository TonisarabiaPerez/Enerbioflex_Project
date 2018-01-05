<?php
try
{
	$bdd = new PDO('mysql:charset=utf8mb4;dbname=energiculteur','energiculteur', 'EnerBIOflex2016');
	$bdd->query('set names utf8');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
	die('<p> <h1>ÉCHOUÉ!</h1>'.'Le plan à échoué. <br/>Erreur : '.$e->getMessage().'</p>');
}

?>