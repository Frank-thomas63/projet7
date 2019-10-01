<?php
try{
    // Sous WAMP (Windows)	// On se connecte à MySQL
$bdd = new PDO('mysql:host=164.132.110.233;dbname=simplon_chaustore;charset=utf8', 'simplon', 'xCIwyTKo3)?(31;*'); //> co a la base simplon
//    $bdd = new PDO('mysql:host=localhost;dbname=simplon_chaustore;charset=utf8', 'frank', 'Sfra63nck+');
  }
  catch (Exception $e)
  {	// En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
}


?>
