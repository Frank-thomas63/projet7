<?
$rech=$_POST['t_rechercher'];
$name=$_POST['name'];
$category_id=$_POST['category_id'];
$brand_id=$_POST['brand_id'];
$color_id=$_POST['color_id'];
$image=$_POST['image'];
$price=$_POST['price'];
$gender=$_POST['gender'];
require_once 'connect.php';

 if (isset($_POST['rechercher']))
{
$req=$bdd->query('select * from  product where nom='$rech);
$res=$bdd->query($req,$bdd);
$enrg=$res->fetchColumn();

 if ($enrg[0] == $rech)
{

   echo "<form id='form1' name='form1' method='post' action='teste1.php'>
    <table width='420' border='0'>
   <tr>
     <td width='169' bgcolor='#CCFF00'><label>
    <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
     </label></td>
     <td width='369' bgcolor='#CCFF00'><label>
    <input name='t_rechercher' type='text' id='t_rechercher' value='$enrg[0]' />
     </label>Recherche par nom</td>
   </tr>
   <tr>
     <td>Nom</td>
     <td><label>
    <input name='name' type='text' id='name'  value='$enrg[1]'/>
     </label></td>
   </tr>
   <tr>
     <td>Prénom</td>
     <td><label>
    <input name='category_id' type='text' id='category_id' value='$enrg[2]' />
     </label></td>
   </tr>
   <tr>
     <td>Te</td>
     <td><label>
    <input name='brand_id' type='text' id='brand_id' value='$enrg[3]' />
     </label></td>
   </tr>
   <tr>
     <td>Fax</td>
     <td><input name='color_id' type='text' id='color_id' value='$enrg[4]' /></td>
   </tr>
   <tr>
     <td>Fax</td>
     <td><input name='image' type='text' id='image' value='$enrg[5]' /></td>
   </tr>
   <tr>
     <td>Fax</td>
     <td><input name='price' type='text' id='price' value='$enrg[6]' /></td>
   </tr>
   <tr>
     <td>Fax</td>
     <td><input name='gender' type='text' id='gender' value='$enrg[7]' /></td>
   </tr>
   <tr>
     <td colspan='2'><label>
    <input name='nouveau' type='reset' id='nouveau' value='Nouveau' />
    <input name='ajouter' type='submit' id='ajouter' value='Ajouter' />
    <input name='modifier' type='submit' id='modifier' value='Modidier' />
    <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
     </label></td>
   </tr>
    </table>
    <p> </p>
  </form>";
}
  else
   {
  echo '<body onLoad="alert('product not found..')">';
  echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
  }
}

 else
  {



         if (isset($_POST['ajouter']))

           if($name=='')
          {
         echo '<body onLoad="alert('indispensable product')">';
                               echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif ($category_id=='')
          {
          echo '<body onLoad="alert('indispensable category...')">';
                               echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif($brand_id=='')
          {
          echo '<body onLoad="alert('indispensable brand...')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif ($color_id=='')
          {
          echo '<body onLoad="alert('indispensable color...')">';
                               echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif($image=='')
          {
          echo '<body onLoad="alert('indispensable image...')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif ($price=='')
          {
          echo '<body onLoad="alert('indispensable price...')">';
                               echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          elseif ($gender=='')
          {
          echo '<body onLoad="alert('indispensable gender...')">';
                               echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
         else
         {
          $rqt="insert `product` values('$nom','$category_id','$brand_id','$color_id','$image','$price','$gender')";



          $bdd->query($rqt);

            echo '<body onLoad="alert('Ajout effectuée...')">';
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          mysql_close();
               }
       if (isset($_POST['modifier']))

          if($name=='' || $category_id=='' ||$brand_id=='' ||$color_id=='' ||$image=='' ||$price=='' ||$gender=='' )
          {

          echo '<body onLoad="alert('fair une recherch avant la modification ou verifiez les champs obligatoire...')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
          }
          else
          {
           $rqt="update product set category_id='$category_id',brand_id='$brand_id',color_id='$color_id',image='$image',price='$price',gender'$gender' where nom ='$rech'";
        $bdd->query($rqt);
          echo '<body onLoad="alert('Modification effectuée...')">';
          echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
        mysql_close();
         }
       elseif(isset($_POST['supprimer']))
         {

         $rqt="delete  FROM t_client  where nom ='$rech'";

        mysql_query($rqt);
         echo '<body onLoad="alert('Suppression effectuée...')">';
        echo '<meta http-equiv="refresh" content="0;URL=teste1.php">';
        mysql_close();
         }


  }

?>
<? require_once 'connect.php';
$req="select * from  product";
$bdd->query($rqt);
$res=$bdd->query($req,$bdd);
?>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >
  <td width="152">id</td>
  <td width="152">name</td>
  <td width="66">category_id</td>
  <td width="248">brand_id</td>
  <td width="42">color_id</td>
  <td width="42">image</td>
  <td width="42">Price</td>
  <td width="42">gender</td>
</tr>
<?
$var=0;
while($row=$res->fetchColumn())
{

if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
  <td><? echo $row[0];  ?></td>
  <td><? echo $row[1];  ?></td>
  <td><? echo $row[2]  ?></td>
  <td><? echo $row[3]  ?></td>
  <td><? echo $row[4];  ?></td>
  <td><? echo $row[5];  ?></td>
  <td><? echo $row[6]  ?></td>
  <td><? echo $row[7]  ?></td>
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
  <td><? echo $row[4];  ?></td>
  <td><? echo $row[5];  ?></td>
  <td><? echo $row[6]  ?></td>
  <td><? echo $row[7]  ?></td>
</tr>
<?
$var=0;
 }
 }
?>
</table>
