 <?php $title='Renitialiser le mot de passe'; ?>
    
    <?php ob_start(); ?>
<?php echo form_open()?>
<label>Login :</label><input type="text" name="login" value="">
<label>Veuillez nous rappelez votre email :</label><input type="email" name="email" value="">
<input type="submit" name="envoyer" value="envoyer">
</form>
<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>
	