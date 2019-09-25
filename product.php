<?php
  if (!empty($_POST)){
    $idcli = $_POST['id'];
    // product
    $select = 'SELECT id, name, category_id, brand_id, color_id, image, price, gender FROM product WHERE id =' . $idcli ;
    $result = $bdd->query($select);
    $selected = 'SELECT name FROM product WHERE id =' .$idcli ;
    // brand


    while ($donnees = $result->fetch()) {
    echo ' Product : '.$donnees['name'].'<br>
      Price : '.$donnees['price']. '€ <br> Geder : '.$donnees['gender']. '<br>';
    }

    $resultBrand = $bdd-> query('SELECT brand.name FROM brand inner join product on brand.id = product.brand_id WHERE product.id =' .$idcli);
      while ($brandId = $resultBrand->fetch()){
    echo 'Brand : '.$brandId['name'].'. <br>';
    }

    $repColor = $bdd->query('SELECT color.name FROM color inner join product on color.id = product.color_id WHERE product.id =' .$idcli);
    while($donColor = $repColor->fetch()){
      echo ' Color :'.$donColor['name'].'.<br> ';
    }
  //$requete->closeCursor();
    $repCategory = $bdd->query('SELECT category.name FROM category inner join product on category.id = product.category_id WHERE product.id =' .$idcli);
    while($donColor = $repCategory->fetch()){
      echo ' Category :'.$donColor['name'].'. ';
    }

  }

?>
