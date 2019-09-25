<?php
if (!empty($_POST)){
  $idcli = $_POST['id'];
  $select = 'SELECT image FROM product WHERE id =' . $idcli ;
  $result = $bdd->query($select);
  while ($donnees = $result->fetch()) {
  echo $donnees['image'];
  print '<img src="img/logo.svg" alt="dont logo"/>';
}

}
?>
