<?php 
session_start();
$connect = 'config.php';
if(!file_exists($connect)) {
	header('Location: install/');
}
//Redirection de l'utilisateur à la page accueil si connecté
if (!empty($_SESSION['id'])) {
	header('Location: /');
}
include('header.php');
if(!empty($_POST['connect'])) {
	$co = Connexion::connexionCreate();
	if($co==="0") {
		echo '<center>
		<br />
		Connexion en cours ...
		<br />
		</center>';
		
	}
	else {
		/*modifications julien*/
		echo '<center>
		<br />
		Connexion impossible ...
		<br />
		</center>';
		/* code initial des étudiants   alert($co.' <a href="index.php">Retour</a>');*/
	}
	redirection("../", $time=2);
}
else {
	$captcha = new Captcha;
	echo '
	<br><br>

	<div class="titreConnexion"> Connectez-vous pour acceder à votre compte Energiculteur </div>
	
	<br><br>
	
	<fieldset class="fieldset">

	<form id="notreForm"action="" method="post">

	<table cellpadding="11" align="center" class="form">
	<tr>
	<td colspan="3" align="center" class="titre_form"></td>
	</tr>
	<tr>

	<td><input id="titreFormulaire" type="text" name="mail" placeholder="Adresse mail"/></td>
	</tr>

	<tr>
	
	<td><input id="titreFormulaire" type="password" name="pass"  placeholder="Mot de passe" /></td>
	</tr>
	<tr>
	
	<td><div id="questionCaptcha">'.$captcha->captcha().'</div></td>
	
	<td><input id="resCaptcha" type="text" name="captcha" /></td>
	</tr>
	<tr>
	<td colspan="3" align="center"><input  type="submit" name="connect" value="Se Connecter" class="input" /></td>
	</tr>
	<tr>
	<td align="center" colspan="3"><br /> <a href="new_passe.php"><div id="mdpforgot"> Mot de passe oubli&eacute; ? </div> </a></td>
	</tr>
	</table>
	</form> 
	</fieldset>';
	echo'  <br> <div id="CreationAccount"> <a href="inscription.php"> Creer un compte </a> </div> <br><br><br><br><br>' ;
}
include('footer.php');
?>
