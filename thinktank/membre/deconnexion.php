<?php session_start();
if (!isset($folder)) $folder = '../';
include('function.php');
Connexion::deconnexion('index.php');
?>