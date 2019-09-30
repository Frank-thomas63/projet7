
    <?php
    $idcli=$_POST['id'];
      //menu déroulant size
      $repSize = $bdd->query('SELECT size.name FROM size INNER JOIN stock on size.id = stock.size_id WHERE product_id =' .$idcli);
      while($donSize = $repSize->fetch()){
      ?>
      <option value="<?php echo $donSize['id']; ?>"><?php echo $donSize['name']; }?></option>

<?php

$repStock = $bdd->query('SELECT stock FROM stock WHERE size_id and product_id =' .$idcli);
while ($stock = $repStock->fetch()){
echo 'stock : '.$stock['stock'].'. <br>';
}?>
