<?php
require_once('connexion.php');
include('header_simple.php');
include('function.php');
require("lib/PHPMailer-master/PHPMailerAutoload.php");
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Enerbioflex.com"<groupeb2s3@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<head>
				<meta charset="utf-8">
			</head>
			
			<body>
					Nom de l\'exp&eacute;diteur :'.$_POST['nom'].'<br />
					Mail de l\'exp&eacute;diteur :'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
			</body>
		</html>
		';

		//mail("islammess95@gmail.com", "CONTACT - Enerbioflex.com", $message, $header);
		$msg = contactezNous($bd,$message,$_POST['mail'],$_POST['nom']);
	}
	else
	{
		$erreur="Tous les champs doivent être complétés !";
	}
}
function contactezNous($bdd,$message,$mailauteur,$nomauteur){
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	// Récupération des variables nécessaires au mail de confirmation	
	$dest = $mailauteur;
	$login = $nomauteur;
	 

	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	
	
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'groupeb2S3@gmail.com';                 // SMTP username
	$mail->Password = 'choisira5';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('no-reply@gmail.com', 'ENERBIOFLEX');
	$mail->addAddress($dest, 'User');    
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Contact';
	$mail->Body    = $message;
	
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		$msg=  'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$msg= 'Votre message à bien été envoyé';
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
	<h1>Contactez-nous</h1>
	<hr color="7ad443">
<div class="form">
	<fieldset class = "fieldset">
		<legend>Formulaire de contact</legend><br/>
		<form method="POST" action="" id="yyy")>
		
		<table width="80%" align="center">

			<tr>
				<td align="left" class="titre_form" > Nom : </td>
				<td> <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /></td>				
			</tr>
			<tr>
				<td align="left" class="titre_form" > Email : </td>
				<td> <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /></td>
			</tr>

			<tr>
				<td align="left" class="titre_form"> Message : </td>
				<td><textarea name="message" placeholder="Votre message" rows="4" cols="40"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<br />
				<input type="submit" value="Envoyer" name="mailform" class="input" />
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