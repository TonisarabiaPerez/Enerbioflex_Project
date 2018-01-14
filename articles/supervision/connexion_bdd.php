<?php
$username = "energiculteur";
$password = "EnerBIOflex2016";
$hostname = "energiculteur.fr"; 

//connection to the database
$dbhandle = mysqli_connect('mysql:charset=utf8mb4;energiculteur.fr','energiculteur', 'EnerBIOflex2016');//mysqli_connect('energiculteur.fr', 'energiculteur', 'EnerBIOflex2016') 
  or die('Unable to connect to MySQL');
//select a database to work with
$selected = mysql_select_db("energiculteur.fr",$dbhandle) 
  or die("Could not select examples");
?>
