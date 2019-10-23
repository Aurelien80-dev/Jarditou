
    
    <?php ob_start(); ?>
    
<title>Catalogue</title>
</head>

<body>
   <center><h1 id="titre" >Produits disponibles à l'achat</h1></center>
	<div class="container">
	<div class="table-responsive">
	
<table class="table ">
        <tr>
            <th>Photo</th>
            <th>ID</th>
            <th>Référence</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Couleur</th>
            <th>Ajout</th>
            <th>Modif</th>
            <th>Bloqué</th>
        </tr>
        <tr>
            <?php foreach ($listes as $row)
            {
                $photo= "assets/photos/".$row->pro_id.".".$row->pro_photo;
            ?>
                <td> <img src="<?php echo base_url($photo);?>" height="80px" width="80px"></td>
                <td><?php echo $row->pro_id; ?></td>
                <td><?php echo $row->pro_ref; ?></td>                            
                <td><a href="<?php echo site_url('produits/details/'.$row->pro_id) ?>" target="blank"><?php echo $row->pro_libelle; ?></a></td>
                <td><?php echo $row->pro_prix; ?></td>
                <td><?php echo $row->pro_stock; ?></td>
                <td><?php echo $row->pro_couleur; ?></td>
                <td><?php echo $row->pro_d_ajout; ?></td>
                <td><?php echo $row->pro_d_modif; ?></td>
                <td><?php echo $row->pro_bloque; ?></td>
        		
      
        </tr>
        <?php }?>      
          <?php if ($this->session->ROLE == 'Admin' )
               {
                ?>
        <tr><td'><a href="<?php echo site_url("Produits/ajout")?>">Ajouter un produit</a></td></tr>
       <?php }?>

        
        
    </table>
    </div>
	</div>
    </body>
<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>