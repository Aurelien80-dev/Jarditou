<!-- application/views/ajout.php -->
<!-- application/views/ajout.php -->
<?php $title='Ajout d\'un produit'; ?>
  
    <?php ob_start(); ?>
    
<?php echo form_open_multipart(); 


?>
 
<fieldset>
<div class="col-md-6 col-md-offset-3">
 
<label  for="pro_id">ID du produit :</label><input type="text" name="pro_id" class='form_control'/><br>
<select name="categories" id="categories" class="form-control">
                <option selected disabled>Categorie du Produit</option>     
               <?php
                foreach ($categories as $key => $a) 
                {
                    echo"<option value='".$a->cat_id."'>".$a->cat_nom."</option>";   
                }
                ?>  
            </select>
            </div>
            <div class="col-md-4 col-md-offset-3">
  <div class="form-group row">
            <label for="pro_cat_id" class=" form-label text-right"></label>
            <div  class=" form-label text-right">
            <select name="pro_cat_id"class="form-control" id="pro_cat_id">
               <option selected disabled>Sélectionnez</option>     
            </select>
            </div>
       </div> 
	</div>



 <div class="form-group">
<label for="pro_libelle">Libellé du produit: </label><input type="text" name="pro_libelle" class="form-control"/><br>
</div> <div class="form-group">
<label for="pro_ref">Référence du produit: </label><input type="text" name="pro_ref"  class="form-control"/><br>
</div> <div class="form-group">
<label for="pro_description">Description du produit:</label><br/>
</div> <div class="form-group">
<textarea name="pro_description" rows="10" cols="50"  class="form-control"></textarea><br>
</div> <div class="form-group">
<label for="pro_couleur">Couleur :</label><input type="text" name="pro_couleur"  class="form-control"><br>
</div> <div class="form-group">
<label for="pro_prix">Prix du produit: </label><input type="number" step="0.01" name="pro_prix"  class="form-control"/><br>
 </div><div class="form-group">
<label for="pro_stock">Stock actuel du produit: </label><input type="number" name="pro_stock"  class="form-control"/><br>
<label for="pro_photo">Extension de la photo:</label><input type="text" placeholder="jpg, png, gif"/class="form-control"><br>
<label for="pro_photo">Photo </label><input type="file" name="pro_photo" id="photo" class="form-control"/><br>
<div class="form-group">
<label for='pro_bloque'>Le produit est-il bloqué à la vente en ce moment?</label>
<input type="radio" name="pro_bloque" value="1"  class="form-input" id='coche'/>Oui
<input type="radio" name="pro_bloque" value="0"  class="form-input" id='coche'/>Non
</div>
<input type="submit" value="Ajouter"  class=" btn btn-dark"/>
<input type="reset" value="Annuler"class="btn btn-dark"/>


</fieldset>
</form>
<script>
var CI_BASE_URL = "<?php echo site_url(); ?>";
</script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
	<script src='<?php echo base_url('assets/js/script.js');?>'></script>
<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>