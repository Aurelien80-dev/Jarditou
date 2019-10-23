  <?php ob_start(); ?>
<div class="container">
<table border="3" class="horaires">
<tr>
<td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td></tr>
<tr><td>08h30</td><td>08h30</td><td>08h30</td><td>08h30</td><td>08h30</td></tr>
<tr><td>12h00</td><td>12h00<td>12h00</td><td>12h00</td><td>12h00</td></tr>
<tr><td>12h45</td><td>12h45</td><td>12h45</td><td>12h45<td>12h45</td></tr>
<tr><td>19h00</td><td>19h00</td><td>19h00</td><td>19h00</td><td>19h00</td></tr>
</table>
</div>
<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>