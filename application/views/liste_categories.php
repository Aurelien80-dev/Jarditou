		// Fichier view
    <?php $title='liste des produits'; ?>
      <?php ob_start(); ?>
      <h1>Catégories et sous-catégories</h1>
         <hr>
    <form>
       <div class="form-group row">
            <label for="categories" class="col-2 form-label text-right">Catégories</label>
            <div class="col-6">
            <select name="categories" id="categories" class="form-control">
                <option selected disabled>Sélectionnez</option>     
                <?php
                foreach ($liste_categories as $key => $aListCat) 
                {
                    echo"<option value='".$aListCat->cat_id."'>".$aListCat->cat_nom."</option>\n";   
                }
                ?>           
            </select>
            </div>
       </div>
       <div class="form-group row">
            <label for="sousCategories" class="col-2 form-label text-right">Sous-catégories</label>
            <div class="col-6">
            <select name="sousCategories" id="sousCategories" class="form-control">
               <option selected disabled>Sélectionnez</option>     
            </select>
            </div>
       </div>       
    </form>

        <script>        
        var CI_BASE_URL = "<?php echo site_url(); ?>"; // http://localhost/ci/index.php
        </script> 
      	
      	
      	
      
      	<?php $contenu=ob_get_clean(); ?>
	  <?php require 'templates.php'; ?>
