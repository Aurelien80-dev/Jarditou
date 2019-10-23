<?php
$title='Boutique - Jarditou'; ?>
	
	<?php ob_start(); ?>
	<body>
	<?php 
	if (isset($erreur))
	{
	   echo $erreur;
	}
	?>
    <div class="container">
    <h1>Boutique</h1>
    	<p id="haut_page"></p>
	<p><a href="#bas_page">Bas de page</a></p>
	
	
	
	<hr>
      <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
        Trier par 
      	<div class="dropdown">
</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= site_url('boutique/listes/') ?>">Catégorie</a>
        <a class="dropdown-item" href="<?= site_url('boutique/listePrixCroissants/') ?>">Prix croissants</a>
        <a class="dropdown-item" href="<?= site_url('boutique/listePrixDecroissants/') ?>">Prix décroissants</a>
      </div>
    </div> 
	<table class="table table-bordered ">
		<thead>
    		<tr>
    			<th>Photos</th>
    			<th>Prix</th>
    			<th>Référence</th>
    			<th>Description</th>
    			<th>Achats</th>
    		</tr>
    	</thead>
	<?php 
	foreach ($listes as $valeur)
	{ ?>
	    <tr>
	    	<td class="tableau_photo"><img class="produit_photo" src="<?= base_url('assets/images/jarditou_photos/')?><?= $valeur->pro_id ?>.<?= $valeur->pro_photo ?>"  alt="photo du produit <?= $valeur->pro_libelle ?>" title="photo du produit <?= $valeur->pro_libelle ?>" height="75"></td>
	    	<td class="tableau_prix"><?= str_replace('.',',',$valeur->pro_prix) ?> <sup>€</sup></td>
	    	<td><?= $valeur->pro_ref ?></td>
	    	<td><?= $valeur->pro_description ?></td>
	    	<td>
    	    	<?php echo form_open(); ?>
        	    	<label for="pro_qte" class='text-light'>Quantité: </label>
                    	<select class="form-control" name="pro_qte" id="pro_qte">
                            <?php 
                            for ($i=1;$i<=$valeur->pro_stock;$i++) 
                            { ?>
                                <option value=<?= $i ?>><?= $i ?></option>
                            <?php    
                            }
                			?>
                		</select>
                	<input type="hidden" name="pro_prix" value="<?= $valeur->pro_prix ?>">
                	<input type="hidden" name="pro_id" value="<?= $valeur->pro_id ?>">
                	<input type="hidden" name="pro_libelle" value="<?= $valeur->pro_libelle ?>">
                	<div class="form-group"><input class="btn btn-default btn-sm-light" type="submit" value="Ajouter au panier"></div>
             
	    	</td>
	    </tr>
	<?php   
	}
	?>
	</table>
	
	<p id="bas_page"></p>
	<p><a href="#haut_page">Haut de page</a></p>
    </div>
    <?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>