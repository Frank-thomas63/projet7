<?php
  if (!empty($_POST)){
     $repStock = $bdd->query('SELECT stock FROM stock where size_id = '.$donSize['id']. ' and product_id =' .$idcli);

    $reqStock = "INSERT INTO `stock` (`stock`) VALUES (`$repStock`)";
    $result = $bdd->query($reqStock);
    echo $result;

    }

 ?>
