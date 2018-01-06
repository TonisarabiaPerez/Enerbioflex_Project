<?php
	include('config.php');
	// variables de connexion
	define('DNS', 'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd);
	define('USER', $PARAM_utilisateur);
	define('PASS', $PARAM_mot_passe);
	// base site
	define('NOMSITE', $PARAM_nom_site);
	define('MAILSITE', $PARAM_mail_site);
	define('PASSSITE', $PARAM_pass_site);
	define('URLSITE', 'www.energiculteur.fr');

// base sql
define('SELECT', 'SELECT ');
define('UPDATE', 'UPDATE ');
define('INSERT', 'INSERT INTO ');
define('DELETE', 'DELETE ');
define('ALL', '*');
// les tables
define('MEMBRE', ' FROM membre');
//define('JETON', ' FROM scriptSecure');
define('JETON', ' FROM scriptsecure');
//define('ACTIVATION', ' FROM scriptActivation');
define('ACTIVATION', ' FROM scriptactivation');
//define('JETONMAIL', ' FROM sciptActivationMail');
define('JETONMAIL', ' FROM sciptactivationmail');
define('MESSAGE', ' FROM message');
//define('SMILEY', ' FROM scriptSmiley');
define('SMILEY', ' FROM scriptsmiley');
//define('ACCESPROFIL', ' FROM scriptAccesFiches');
define('ACCESPROFIL', ' FROM scriptaccesfiches');
//define('AVATAR', ' FROM scriptAvatar');
define('AVATAR', ' FROM scriptavatar');
// les tables sans FROM
define('MEMBREZ', 'membre');
//define('JETONZ', 'scriptSecure');
define('JETONZ', 'scriptsecure');
//define('ACTIVATIONZ', 'scriptActivation');
define('ACTIVATIONZ', 'scriptactivation');
//define('JETONMAILZ', 'sciptActivationMail');
define('JETONMAILZ', 'sciptactivationmail');
define('MESSAGEZ', 'message');
//Correction: la table scriptAccesFiches se nomme scriptaccesfiches
define('ACCESPROFILZ', 'scriptaccesfiches');
// les variables de recherche sur la table membres
define('ID', ' WHERE id=:id');
define('NOI', ' WHERE id!=:id');
define('NOID', ' WHERE id!=:id ORDER BY login ASC');
define('PSEUDO', ' WHERE login=:identifiant');
define('EMAIL', ' WHERE mail=:mail');
define('PROFIL', ' (login, mail, mdp) VALUES (:login, :mail, :pass)');
define('NEWPROFIL', ' SET nom=:nom, prenom=:prenom, ville=:ville, pays=:pays, civilite=:civilite where login=:login');
define('IDMEMBRE', ' WHERE id_membre=:id');
define('LOGIN', ' WHERE login=:login');
define('ACTIVMEMBRE', ' SET activation=:activer');
define('MAJPROFIL', ' SET mail=:mail, ville=:ville, pays=:pays, civilite=:civilite, date_naissance=:date_naissance, nom=:nom, prenom=:prenom, description=:description, mailing=:mailing, photo=:photo, voie=:voie,profession=:profession,nom_entreprise=:nom_entreprise WHERE id=:id');
define('MAJAVATAR', ' SET id_avatar=:idAvatar');
define('MAJPASS', ' SET mdp=:newPass');
define('MAJDATECO', ' SET date_connexion=:currentdt');
define('NIVEAU', ' SET niveau=:niveau');
define('DESIGN', ' SET design=:design');
// les variables de recherche sur la table methode d'activation
define('METHODEACTIV', ' WHERE activation=1');
define('CHANGEMETOD', ' SET activation=:activ');
// les variables de recherche sur la table jeton de connexion
define('JETONCONNEXION', ' WHERE id_membre=:id AND ip_connexion=:ip');
define('JETONSESSION', ' WHERE id_membre=:id AND jeton=:jeton');
define('JETONMEMBRE', ' WHERE id_membre=:id');
define('JETONDATE', ' SET date=:date');
define('JETONVALUES', ' (id_membre, jeton, ip_connexion, date) VALUES (:id, :jeton, :ip, :date)');
// les variables de recherche sur la table jeton d'activation par mail
define('JETONMAILVALUES', ' (id_membre, jeton) VALUES (:id, :jeton)');
define('JETONACTIVATION', ' WHERE jeton=:jeton');
// les variables de recherche sur la table message
define('IDEXP', ' WHERE id_exp=:id');
define('NBNEW', ' WHERE id_dest=:id AND lu!="1"');
define('MESSAGELISTE', ' WHERE id_dest=:id AND effacer="0" ORDER BY date DESC');
define('MESSAGEINSERT', ' (id_exp, id_dest, titre, date, contenu) VALUES (:id_exp, :id_dest, :titre, :date, :contenu)');
define('BIENVENUE', ' (id_exp, id_dest, titre, date, contenu) VALUES (:id_exp, :id_dest, :titre, :date, :contenu)');
define('LU', ' SET lu="1"');
define('EFFACE', ' SET effacer="1"');
// les variables de recherche sur la table acces au information profil
define('MAJACCESPROFIL', '=:maj');
define('INSCRIPTION', '(id_membre) VALUES (:id)');
?>
