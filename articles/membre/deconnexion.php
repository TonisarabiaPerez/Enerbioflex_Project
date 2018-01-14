<?php
if (!isset($folder)) $folder = '../';
include('function.php');
session_start();
$_SESSION = array();
if(isset($_SESSION['niveau']))
{
  if($_SESSION['niveau']=='1')
  {
    $_SESSION['mailing']=null;
    $_SESSION['niveau']=null;
    $_SESSION['id'] =null;
    $_SESSION['nom']=null;
    $_SESSION['prenom']=null;
    $_SESSION['civilite']=null;
    $_SESSION['mail']=null;
    $_SESSION['pays']=null;
    $_SESSION['photo']=null;
    $_SESSION['description']=null;
    $_SESSION['date_naissance']=null;
    $_SESSION['adresseIp']=null;
    $_SESSION['date_creation']=null;
    $_SESSION['date_connexion']=null;
    $_SESSION['ville']=null;
    $_SESSION['activation']=null;
    $_SESSION['login']=null;
  }
  /*else if($_SESSON['type']='P')
  {
    $_SESSION['email']=null;
    $_SESSION['type']=null;
    $_SESSION['id_entreprise']=null;
    $_SESSION['nom_entreprise']=null;
    $_SESSION['nom']=null;
    $_SESSION['prenom']=null;
    $_SESSION['adresse']=null;
    $_SESSION['c_postal']=null;
    $_SESSION['ville']=null;
    $_SESSION['validite']=null;
    $_SESSION['active']=null;
    $_SESSION['username']=null;
  }*/
}
session_destroy();
header('Location: /index.php');
?>
