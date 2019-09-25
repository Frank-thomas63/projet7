<html>
<head>

</head>

<body>
<?php require_once 'connect.php';?>
<h1>Ajout de produit</h1>
<div class="container">
<h2>Product</h2>
<form method="post" action="insert.php" name="selectId">
  <select name="id" id="id"  selected='<?php $donProduct['name']?>'>
    <?php
      //menu déroulant
      $repProduct = $bdd->query('SELECT * FROM product');
      while($donProduct = $repProduct->fetch()){
      ?><option value="<?php echo $donProduct['id']; ?>"><?php echo $donProduct['name']; ?></option><?php
      }?>
  </select>
<form id="form1" name="form1" method="post" action="teste1.php">
  <table width="420" border="0">
    <tr>
      <td width="169" bgcolor="#CCFFCC"><label>
        <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
      </label></td>
      <td width="369" bgcolor="#CCFF00"><label>
        <input type="text" id="t_rechercher" name="t_rechercher"  placeholder="Name"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
        <span class="Style4">      Recherche par nom</span> </label></td>
    </tr>
    <tr>
      <td>Nom</td>
      <td><label>
        <input name="t_nom" type="text" id="t_nom" />
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
<? $cn=mysql_connect("localhost","root");
mysql_select_db("ma_base",$cn);
$req="select * from  t_client";
mysql_query($req);
$res=mysql_query($req,$cn);
?>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >

<td width="152">Nom</td>
<td width="66">Prénom</td>
<td width="248">Téléphone</td>
<td width="42">Fax</td>
</tr>
<?
$var=0;
while($row=mysql_fetch_array($res))
{

if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr>
<?
$var=1;
 }
else
{
?>
<tr bgcolor="#FFCCCC">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr><undefined></undefined>
<?
$var=0;
 }
 }
?>
</table>
</body>
</html>
