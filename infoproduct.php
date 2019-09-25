<?php
var_dump($_POST);
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
        <a href="infoproduct.php">Product</a><a href="stock">Add stock</a><a href="insert.php">Insert product</a>
      </div>
      <form method="post" action="infoproduct.php" name="selectId">
        <select name="id" id="id"  selected='<?php $donProduct['name']?>'>
          <?php
            //menu déroulant
            $repProduct = $bdd->query('SELECT * FROM product');
            while($donProduct = $repProduct->fetch()){
            ?><option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option><?php
            }?>
        </select>
        <input type="submit" name="selectId" >
      </form>
        <!-- infoproduct -->
        <div class="container">
          <div class="shoe">
            <?php
              require_once 'shoe.php'
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
      </form>
    </body>
</html>
