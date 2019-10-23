<?php ob_start(); ?>
<title>Renitialiser mon mot de passe</title>
<?php echo form_open()?>
<label>Login :</label><input type="text" name="login" />
<label>Nouveau mot de passe</label><input type="password" name="mdp" />
<input type="submit" name="changer" value="changer" class='btn btn-dark'/>
<?php $contenu=ob_get_clean();?>
<?php require 'templates.php';?>