<?php

  $message = "";
  $error = "";
  if (!empty($_POST)){
      if(empty($_POST['name'])) {
        $error .= 'you did not return your first name.<br>';
      }
      if (empty($error)){

        $message = 'Congratz! registered successfully';
      }
  }

?>
