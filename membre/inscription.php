<?php
$folder = '../';
include('header.php');

echo '
<div id="form">
	<h1>S\'inscrire</h1>
	<hr color="7ad443">
	<form action="" method="post">
		<fieldset class="fieldset">
		<legend>Inscription</legend>
		
		<table width="80%" align="center">
			<tr>
				<td align="center" colspan="2">';
				if(!empty($_POST['inscription'])) {
					secureform($_POST);
					extract($_POST);
					
					$er =  Inscription::inscrire($civilite, $nom, $prenom,$pseudo, $ville,$voie,$type,$date_de_naissance, $pays, $email, $passeUn, $passeDe,$numero);
				}
				echo '</td>
			</tr>
			
			<tr>
				<td align="left" class="titre_form" width="40%"> Civilité : </td>
				<td><select name="civilite"> 
						<option value="h"> Homme </option> 
						<option value="f"> Femme </option>
					</select></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Vous êtes : </td>
				<td><select name="type"> 
						<option value="pro"> Professionnelle </option> 
						<option value="par"> Particulier </option>
					</select></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Pseudo : </td>
				<td><input type="text" name="pseudo" size="40" required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Nom : </td>
				<td><input type="text" name="nom" size="40" required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Prénom : </td>
				<td><input type="text" name="prenom" size="40"  required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Date de naissance: </td>
				<td><input type="date" name="date_de_naissance" size="40"  required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%">Email : </td>
				<td><input type="email" name="email" size="40" placeholder="email@exemple.fr" required/></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%">Confirmez votre email : </td>
				<td><input type="email" name="email" size="40" required/></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%">Mot de Passe : </td>
				<td><input type="password" name="passeUn" size="40" minlength=8 placeholder="8 caractères minimum" /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%">Confirmer le mot de passe : </td>
				<td><input type="password" name="passeDe" size="40" required/></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Adresse : </td>
				<td><input type="text" name="voie" placeholder="Voie" size="40"  required /></td>
			</tr>
			<tr>
				<td><input type="text" name="ville" placeholder="ville" size="40"  required /></td>
				<td><input type="text" name="cp" placeholder="Code postale" size="40"  required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Numéro de téléphone : </td>
				<td><input type="text" name="numero" placeholder="téléphone" size="40"  required /></td>
			</tr>
			<tr>
				<td align="left" class="titre_form" width="40%"> Pays : </td>
				<td><select name="pays" id="pays">'; include("listepays.php"); echo '</select></td>
			</tr>		
			<tr>
				<td colspan="2" align="center">
				<br />
				<input type="submit" value="Valider Inscription" name="inscription" class="input" />
				<br /><br />
				</td>
			</tr>
		</table>
	</form>
</div>';
if(!empty($er) and isset($er)) {
	if($er!='ok') {?>
		<div id="erreur">
			<div class="alert-r">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				<?php echo $er.', veuillez recommencer l\'inscription.'; ?>
			</div>
		</div>
<?php 
	}
	else {?>
		<div id="valide">
			<div class="alert-v">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				Votre inscription est terminée, vous recevrez un mail de confirmation sous peu.
			</div>
		</div>
<?php
	}
}

include('footer_simple.php');
?>
