<?php $title='Ajout d\'un produit'; ?>
    
    <?php ob_start(); ?>
   <center class="position-relative"><div class="card">

           <div class="card bg bg-dark">
   		<div class="card-body"> 
          
              <h1 class="card-title">Detail du Produit</h1>

            
                <?php foreach ($listes as $row) 
                { ?>  

            
            <p><?php 
            $photo= "assets/photos/".$row->pro_id.".".$row->pro_photo;
                }  ?><img class="card-img" src="<?php echo base_url($photo);?>" height="500px" width="120px">
            </p>

            <br>
                        <div class='card-text'>
            <label> ID:</label>
            <p ><?php echo $row->pro_id ?></p><hr>
            <br>
            <label> Categorie ID:</label>
            <p><?php echo $row->pro_cat_id ?></p><hr>
            <br>
            <label> Référence:</label>
            <p><?php echo $row->pro_ref ?></p><hr>
            <br>
            <label> Libelle:</label>
            <p><?php echo $row->pro_libelle ?></p><hr>
            <br>
            <label> Description:</label>
            <p><?php echo $row->pro_description ?></p><hr>
            <br>
            <label> Prix:</label>
            <p><?php echo $row->pro_prix ?></p><hr>
            
            <label> Stock:</label>
            <p><?php echo $row->pro_stock ?></p><hr>
            <br>
            <label> Couleur:</label>
            <p><?php echo $row->pro_couleur ?></p><hr>
            <br>
            <label> Date d'ajout:</label>
            <p><?php echo $row->pro_d_ajout ?></p><hr>
            <br>
            <label> Date de modification:</label><hr>
            <p><?php echo $row->pro_d_modif ?></p>
            <br>
            <label> Bloque:</label>
            <p><?php echo $row->pro_bloque ?></p><hr>
            <br></div></center>
                        <a href="<?php echo site_url("Boutique/affiche"); ?>"><i class="fas fa-shopping-cart"></i></a>

            <?php 
               if ($this->session->ROLE == 'Admin')
               {
                ?>
            
            <a href="<?php echo site_url("produits/modif/$row->pro_id")?>" class="btn btn-dark">
             Modifier</a> 
         <?php  } ?>
	<?php 
               if ($this->session->ROLE == 'Admin')
               {
                ?>
  
	  <a href="<?php echo site_url("produits/supp/$row->pro_id")?>" class="btn btn-dark">
             Supprimer</a> 
          <?php  } ?>
            <a href="<?php echo site_url("produits/listes")?>" class="btn btn-dark">
             Retour à la liste </a>
             
             <!-- <a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a> -->
           
           <?php 
           $panier_url = "panier/ajout/".$row->pro_id;
           ?>

          
                           
            <br><br> 

<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>