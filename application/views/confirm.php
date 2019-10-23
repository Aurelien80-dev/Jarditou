<?php  $title='Valider'; ?>
    
    <?php ob_start(); ?>
    
<title>Confirmation d'inscription</title>

<h1>Bienvenue sur Jarditou</h1>

<p>Vous etes bien inscrit sur Jarditou ce qui vous permet d'acceder a la boutique. </p>
<p>Merci</p>
<a href="<?= site_url('Boutique/listeBoutique')?>">Acceder a la boutique</a>

<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>
	