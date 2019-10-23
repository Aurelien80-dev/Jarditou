 <?php $title='inscription'; ?>
    
    <?php ob_start(); ?>

<div class="container">
    	<fieldset ><legend>Si vous n'etes pas inscrit, veuillez remplir tous les champs ci-dessous </legend>
		 <?php echo validation_errors ();  ?>
    	<?php echo form_open()?>
    		
    		<div class="form-group ">
        		<div class="form-group"><label for="name">Nom :</label><input class="form-control" type="text" name="nom" id="nom" ><abbr title="champs requis"></abbr></div>
        		<span class='vide'></span>        		
        		<div class="form-group"><label for="fname">Prenom :</label><input class="form-control" type="text" name="prenom" id="prenom"></div>
        		
        		<div class="form-group"><label for="email">Adresse email :</label><input class="form-control" type="text" name="email" id="mel"><abbr title="champs requis"></abbr></div>
        	
        	<div class="form-group"><label for="login">Login</label><input class="form-control" type="text" name="login" id="login"><abbr title="champs requis"></abbr></div>        		
        	
        		<div class="form-group"><label for="mdp">Mot de passe (entre 6 et 8 caractere) :</label><input class="form-control" type="password" name="mdp" id="mdp"><abbr title="Mot de passe entre 6 et 8 caractere"></abbr></div>
        	
        		<div class="form-group"><input class="btn btn-dark" type="submit" name="" value="Valider"></div>
        		</div>
    	
    	</fieldset>
    	
    	
    		</div>
    	<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>
    		<script  type="text/javascript" src="<?php base_url('assets/js/verif formulaire.js');?>"></script>
