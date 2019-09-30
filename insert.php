<?php  var_dump($_POST);?>
<h1>add Product</h1>
<div class="container">
<h2>Product</h2>
<?php
          require_once 'connect.php';
          require_once 'verif.php';
          if(!empty($message)){
            echo $message;
          }else{
            echo $error;
          }
        ?>
        <?php if (empty($_POST) || !empty($error)){ ?>
        <form method="post" action="insert.php">
        <p>
          <label for='name'> First name :</label>
          <input id='name' name='name' placeholder="Product" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
        </p>
        <p>
          <input class="stock" type="submit" value="Create your account">
        </p>
      </form>
    <?php
    if (!empty($_POST)){
      $name = $_POST['name'];
      $req = "INSERT INTO `product` (`name`) VALUES ('$name')";
      $result = $bdd->query($req);
      var_dump ($result);
    }  }
     ?>
