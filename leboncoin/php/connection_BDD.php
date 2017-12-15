<?php

	// CONNECTION BDD
	
	$sgbd_type = 'mysql';
	$domain = 'localhost';
	$dbname = 'energiculteur.fr';
	$charset = 'utf8';
	$root = 'root';
	$rootpwd = '';
	$dbuser = 'energiculteur';
	$dbpwd = 'EnerBIOflex2016';

	try{
		$bdd = new PDO(/*$sgbd_type.':host='.$domain.';dbname='.$dbname.';charset='.$charset*/'mysql:charset=utf8;energiculteur.fr' ,$dbuser, $dbpwd);
		$bdd->query('SET NAMES utf8');
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		die('<p>Erreur connection BDD: '.$e->getMessage().'</p>');
	}
	
?>