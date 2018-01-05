<?php session_start();
require ('connexion.php');
include ('header_simple.php');
include ('function.php');
include('membre/config.php');
require("lib/PHPMailer-master/PHPMailerAutoload.php");
if(isset($_SESSION['id']) AND !empty($_SESSION['id']) ) {
	if(isset($_POST['signaler']) ) {
		$requete=$bd->prepare('SELECT login, mail FROM membre WHERE id=:id');
		$requete->bindValue(':id',$_SESSION['id']);
		$requete->execute();
		$membre=$requete->fetch(PDO::FETCH_ASSOC);
		
		//Signaler provient d'une page
		if(isset($_POST['titre']) && isset($_POST['id']) ) {
			$titre = $_POST['titre'];
			$id = $_POST['id'];
			
			if(isset($_POST['sujet']) && isset($_POST['message']) ) {
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"Enerbioflex.com"'."\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';
				
			$message='
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				
				<body>
						Nom de l\'exp&eacute;diteur :'.$_POST['login'].'<br />
						'.$titre.'<br />
						Id:'.$id.'<br />
						Raison du signalement:'.$_POST['sujet'].'<br />
						Message de l\'exp&eacute;diteur :'.$_POST['message'].'<br />
						<br />
						'.nl2br($_POST['message']).'
						<br />
				</body>
			</html>
			';

			//mail("islammess95@gmail.com", "CONTACT - Enerbioflex.com", $message, $header);
			$msg = signalez($message,$_POST['mail']);
			}else if (isset($_POST['envoi'])){
				$erreur="Tous les champs doivent être complétés ";
			}
		}
	}else{
		header( 'Location: erreur.php' );
	}
}else{
	header( 'Location: membre/index.php' );
}

function signalez($message,$dest){
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	// Récupération des variables nécessaires au mail de confirmation	
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $PARAM_mail_site;                 // SMTP username
	$mail->Password = $PARAM_pass_site;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('no-reply@gmail.com', 'ENERBIOFLEX');
	$mail->addAddress($dest);     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Enerbioflex - Signalement';
	$mail->Body    = $message;
	
	
	if(!$mail->send()) {
		$msg=  'Le message n\'a pas été envoyé. Veuillez contacter l\'administrateur. (Erreur:' . $mail->ErrorInfo.')';
	} else {
		$msg= 'Votre message a bien été envoyé';
	}
	
	return $msg;
	
	
}
?>
<?php 
if(isset($msg))
{
	alertv($msg);
}
else if(isset($erreur))
{
	alertr($erreur);
}
?>
	<h1>Signaler</h1>
	<hr color="7ad443">
<div class="form">
	<form action="" method="post">
		<fieldset class="fieldset">
		<legend>Formulaire</legend>
		
		
			<table width="80%" align="center">

			<tr>
				<td align="left" class="titre_form" > Login : </td>
				<td><input type="text" name="login" value="<?php echo $membre['login'] ?>" size="40"  readonly /></td>
				<td><input type="hidden" name="mail" value="<?php echo $membre['mail'] ?>"  size="40"  /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" > Titre : </td>
				<td><input type="text" name="titre" value="<?php echo $titre ?>" size="40"  readonly /></td>
			    <td><input type="hidden" name="id" value="<?php echo $id ?>" size="40" /></td>
			</tr>

			<tr>
				<td align="left" class="titre_form"> Raison du signalement : </td>
				<td> <input type="radio" name="sujet"  value="Contenu inapproprié" /> Contenu inapproprié</br>
				<input type="radio" name="sujet"  value="Caractére injurieux" /> Caractére injurieux</br>
				<input type="radio" name="sujet"  value="Autre" /> Autre</td>
			</tr>
			<tr>
				<td align="left" class="titre_form"> Précisez* : </td>
				<td><textarea name="message" placeholder="Votre message" rows="4" cols="40"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<br />
				<input type="submit" value="Envoyer" name="signaler" class="input" />
				<br /><br />
				</td>
			</tr>
		</table>
	
		</form>
	</fieldset>
</div>
<?php
include('footer_simple.php');
?>





















