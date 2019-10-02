<?php
if (!empty($_POST)){
  $idcli = $_POST['id'];
  $selectImg = 'SELECT image FROM product WHERE id =' . $idcli ;
  $resultImg = $bdd->query($selectImg);
  while ($donneesImg = $resultImg->fetch()) {
  echo $donneesImg['image'];
  print '<img src="img/logo.svg" alt="dont logo"/>';
}

}
?>
