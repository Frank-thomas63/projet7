<?php
var_dump($_POST);
 require_once 'connect.php';?>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
      <h1>Simplon Chaustore</h1>
      <div class="menu">
        <a href="infoproduct.php">Product</a><a href="stock">Add stock</a><a href="insert.php">Insert product</a>
      </div>
      <form method="post" action="infoproduct.php" name="selectId">
        <select name="id" id="id">
          <?php
            //menu déroulant
            $repProduct = $bdd->query('SELECT * FROM product');
            while($donProduct = $repProduct->fetch())
            {
            ?>
              <option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" name="selectId" >
        

          <div class="container">
            </div>
            <div class="product">
            <?php

            ?>
            </div>
            <div class="logo">
            </div>
          </div>
        </form>
    </body>
</html>
