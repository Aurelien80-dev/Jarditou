
<?php $title='Ajout d\'un produit'; ?>
    
    <?php ob_start(); ?>
 <center class="position-relative"><div class="card">

           <div class="card bg bg-dark">
   		<div class="card-body"> 
              
<h1 class="card-title">Voulez-vous supprimer ce produits</h1>
<hr>




<span>
 <?php foreach ($listes as $row) 
                ?>  

            
            <p><?php 
            $photo= "assets/photos/".$row->pro_id.".".$row->pro_photo;
            ?><img class="card-img" src="<?php echo base_url($photo);?>" height="500px" width="120px">
          

            <br>
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
<?php echo form_open(); ?>
<input type="submit" value="Supprimer" name="Supprimer" class="btn btn-dark"><br>
<?php echo form_close()?>
</span></div></div></div>
<hr>
            <br></div></center>

<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>