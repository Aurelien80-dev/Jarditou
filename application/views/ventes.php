<?php $title='Ajout d\'un produit'; ?>
    
    <?php ob_start(); ?>
<?php
session_start();
include_once("fonctions-panier.php");
?>
    
<body>

<form method="post" action="panier.php">
<table style="width: 400px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr>
		<td>Libellé</td>
		<td>Reference</td>
		<td>Prix Unitaire</td>
		<td>Action</td>
	</tr>


	<?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['pro_libelle']);
		if ($nbArticles <= 0)
		echo "<tr><td>Votre panier est vide </td></tr>";
		else
		{
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				echo "<tr>";
				echo "<td>".htmlspecialchars($_SESSION['panier']['pro_libelle'][$i])."</ td>";
				echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['pro_ref'][$i])."\"/></td>";
				echo "<td>".htmlspecialchars($_SESSION['panier']['pro_prix'][$i])."</td>";
				echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['pro_libelle'][$i]))."\">XX</a></td>";
				echo "</tr>";
			}

			echo "<tr><td colspan=\"2\"> </td>";
			echo "<td colspan=\"2\">";
			echo "Total : ".MontantGlobal();
			echo "</td></tr>";

			echo "<tr><td colspan=\"4\">";
			echo "<input type=\"submit\" value=\"Rafraichir\"/>";
			echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

			echo "</td></tr>";
		}
		$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $pro_ref = array();
      $i=0;
      foreach ($q as $contenu){
         $pro_ref[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($pro_ref) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['pro_libelle'][$i],round($pro_ref[$i]));
         }
         break;

      Default:
         break;
   }
}
	}
	?>
</table>
</form>
</body>
<?php $contenu=ob_get_clean(); ?>
<?php require 'templates.php'; ?>