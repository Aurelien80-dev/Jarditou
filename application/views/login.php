<?php $title='Connexion'; ?>
    
    <?php ob_start(); ?>
    

<title>Connexion</title>

<center>
	<div class="card" style="width: 18rem;">
	 <h1 class="card-title">Connexion</h1>
	 <?php echo validation_errors ();  ?>
	<?php echo form_open()?>
	 <div class="card-body">
	<label class='text-light'>Login :</label><input type="text" name="login" value=""/>	
	<label class='text-light'>Mot de passe :</label><input type="password" name="mdp" value=""/>
	 <div class='row m-1 p-1'>
	<input type="submit" name="connexion" value="Connexion" class="btn btn-dark"/>
    </div>
     <div class='row m-1 p-1'>
	<a href="<?= site_url('Register/mdpoublier')?>" class="btn btn-dark">Mot de passe oublier</a><br>
	</div>
	 <div class='row m-1 p-1'>
	<a href="<?=  site_url('Register/inscription') ?>" class="btn btn-dark">Inscrivez vous</a>
	</div></div></div>
	<?php echo form_close()?>
</center>
	<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>
	