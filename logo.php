<?php  if (!empty($_POST)){
  $idcli = $_POST['id'];
  $resultBrand = $bdd-> query('SELECT brand.logo FROM brand inner join product on brand.id = product.brand_id WHERE product.id =' .$idcli);
    while ($logoBrand = $resultBrand->fetch()){
  if ($logoBrand ['logo'] == null ){
    print '<img src="img/shoe.svg" alt="dont pictures"/>';
  }else {
    echo $donnees['logo'] ;
  }
}
}

?>
