<?php
 require_once 'connect.php';?>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>
    <body>
      <h1>Simplon Chaustore</h1>
      <div class="menu">
        <a href="infoproduct.php">Product</a><a href="stock">Add stock</a><a href="teste1.php">Insert product</a>
      </div>
      <form method="post" name="selectId" action="" onchange="loadPage(this.value);" >
        <select name="id" id="id"  name="choixDoc" >
          <?php

            //menu déroulant
            $repProduct = $bdd->query('SELECT * FROM product');
            while($donProduct = $repProduct->fetch()){
            ?><option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option><?php
          $idcli = $donProduct['ID'];}
            echo $_POST['id'];?>
        </select>
        <input type="submit" name="selectId" >

        <!-- infoproduct -->
        <div class="container">
          <div class="shoe">
            <?php
              require_once 'shoe.php';
            ?>
          </div>
          <div class="product">
            <?php
              require_once 'product.php';
            ?>
          </div>
          <div class="logo">
            <?php
              require_once 'logo.php';
            ?>
          </div>
        </div>
        <div class="container">
        <h1> Stock </h1>
      </div>
        <div class="container">

        <div class="containerFit">
          <?php

          if (!empty($_POST)){
            $repSize = $bdd->query('SELECT size.* FROM size INNER JOIN stock on size.id = stock.size_id WHERE product_id =' .$idcli);
            while($donSize = $repSize->fetch()){
             echo' size : '.$donSize['name']. ' <br>';
             $repStock = $bdd->query('SELECT stock FROM stock where size_id = '.$donSize['id']. ' and product_id =' .$idcli);
             while ($stock = $repStock->fetch()){
               echo 'stock : '.$stock['stock'].'. <br>';
             }
            

           }}?>
          </div>

        <div class="containerFit2">



      </div>
      </div>
</form>
    </body>


</html>
