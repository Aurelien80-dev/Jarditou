<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="utf-8">
   <title>Tableau des produits</title>
</head>
<body>
   <h1>Tableau des produits</h1>
    <p>Bonjour<p>
    
     <?php foreach ($tableau as $value) {
       echo '<ul><li>'.$value.'</li>'.'</ul>';
    } ?>
    
</body>
</html>