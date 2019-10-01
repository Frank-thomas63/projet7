<html>
<head>

</style>
</head>

<body>
  <h1>Ajout de produit</h1>
  <div class="container">
  <h2>Product</h2>
  <form method="post" action="teste2.php" name="selectId">
  <form id="form1" name="form1" method="post" action="code.php">
    <table width="420" border="0">
      <tr>
        <td width="169" bgcolor="#CCFFCC"><label>
          <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
        </label></td>
        <td width="369" bgcolor="#CCFF00"><label>
          <select id="t_rechercher" name="t_rechercher"  placeholder="Name" >
            <?php
              //menu déroulant
              $cn=mysql_connect("localhost","frank", "Sfra63nck+");
              mysql_select_db("simplon_chaustore",$cn);
              $req = "SELECT * FROM product";
              mysql_query($req);
              $res=mysql_query($req,$cn);

              $repProduct =  mysql_query($req);
              while($donProduct = $repProduct->fetch()){
              ?><option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option><?php
              }?>
          </select>
          <input type="text"   value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
          <span class="Style4">Recherche par nom</span> </label></td>
      </tr>
      <tr>
        <label>Name :<input name="name" type="text" id="name" />
          <select name="id" id="id"  selected='<?php $donProduct['name']?>'>
            <?php
              //menu déroulant
              $repProduct = $bdd->query('SELECT name FROM product');
              while($donProduct = $repProduct->fetch()){
              ?><option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option><?php
              }?>
          </select> </label><br>
        <label>Category_id :<input name="category_id" type="text" id="category_id" />
          <select name="category_id" id="category_id"  selected='<?php $donProduct['category_id']?>'>
            <?php
              //menu déroulant
              $repCotegory = $bdd->query('SELECT category.name FROM category');
              while($donCotegory = $repCotegory->fetch()){
              ?><option value="<?php echo $donCotegory['id']; ?>"><?php echo $donCotegory['name']; ?></option><?php
              }?>
          </select>
         </label><br>
        <label>Brand_id :<input name="brand_id" type="text" id="brand_id" />
          <select name="brand_id" id="brand_id"  selected='<?php $donProduct['brand_id']?>'>
          <?php
            //menu déroulant
            $repBrand = $bdd->query('SELECT brand.name FROM brand');
            while($donBrand = $repBrand->fetch()){
            ?><option value="<?php echo $donBrand['id']; ?>"><?php echo $donBrand['name']; ?></option><?php
            }?>
          </select>
          </label><br>
        <label>Color_id :<input name="color_id" type="text" id="color_id" />
          <select name="color_id" id="color_id"  selected='<?php $donProduct['color_id']?>'>
          <?php
            //menu déroulant
            $repColor = $bdd->query('SELECT color.name FROM color');
            while($donColor = $repColor->fetch()){
            ?><option value="<?php echo $donColor['id']; ?>"><?php echo $donColor['name']; ?></option><?php
            }?>
          </select>
         </label><br>
        <label>Image :<input name="image" type="text" id="image" />  </label><br>
        <label>Price :<input name="price" type="text" id="price" />
          <select name="price" id="price"  selected='<?php $donProduct['price']?>'>
          <?php
            //menu déroulant
            $repPrice = $bdd->query('SELECT distinct price FROM product');
            while($donPrice = $repPrice->fetch()){
            ?><option value="<?php echo $donPrice['id']; ?>"><?php echo $donPrice['price']; ?></option><?php
            }?>
          </select>
         </label><br>
        <label>Gender :<input name="gender" type="text" id="gender" />
          <select name="gender" id="gender"  selected='<?php $donProduct['gender']?>'>
          <?php
            //menu déroulant
            $repGender = $bdd->query('SELECT distinct gender FROM product');
            while($donGender = $repGender->fetch()){
            ?><option value="<?php echo $donGender['id']; ?>"><?php echo $donGender['gender']; ?></option><?php
            }?>
          </select>
          </label><br>

        </label></td>
      </tr>
      <td colspan="2"><label>
        <input name="nouveau" type="reset" id="nouveau" value="Nouveau" />
        <input name="ajouter" type="submit" id="ajouter" value="Ajouter" />
        <input name="modidier" type="submit" id="modidier" value="Modifier" />
        <input name="supprimer" type="submit" id="supprimer" value="Supprimer" />
      </label></td>
    </tr>
  </table>
  <p> </p>
</form>
<? $cn=mysql_connect("localhost","frank", "Sfra63nck+");
mysql_select_db("simplon_chaustore",$cn);
$req="select * from  product";
mysql_query($req);
$res=mysql_query($req,$cn);
?>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >
  <td width="152">id</td>
  <td width="152">Name</td>
  <td width="66">Category_id</td>
  <td width="248">Brand_id</td>
  <td width="42">Color_id</td>
  <td width="42">Image</td>
  <td width="42">Price</td>
  <td width="42">gender</td>
</tr>
<?
$var=0;
while($row=mysql_fetch_array($res))
{

if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><?php echo $row[0];  ?></td>
<td><?php echo $row[1];  ?></td>
<td><?php echo $row[2]  ?></td>
<td><?php echo $row[3]  ?></td>
<td><?php echo $row[4];  ?></td>
<td><?php echo $row[5];  ?></td>
<td><?php echo $row[6]  ?></td>
<td><?php echo $row[7]  ?></td>
</tr>
<?
$var=1;
 }
else
{
?>
<tr bgcolor="#FFCCCC">
  <td><?php echo $row[0];  ?></td>
  <td><?php echo $row[1];  ?></td>
  <td><?php echo $row[3]  ?></td>
  <td><?php echo $row[2]  ?></td>
  <td><?php echo $row[4];  ?></td>
  <td><?php echo $row[5];  ?></td>
  <td><?php echo $row[6]  ?></td>
  <td><?php echo $row[7]  ?></td>
</tr><undefined></undefined>
<?
$var=0;
 }
 }
?>
</table>
</body>
</html>
