<?php
require_once 'connect.php';
$idcli = $_POST['id'];
$resultBrand = $bdd-> query('SELECT brand.name FROM brand inner join product on brand.id = product.brand_id WHERE id =' .$idcli);
  while ($brandId = $resultBrand->fetch()){
echo 'Brand : '.$donneesBrand['name'];
}

$requete->closeCursor();
?>
