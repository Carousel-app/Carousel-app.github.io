<?php

  try {

    require_once('bd_connection.php');

  } catch(Exception $ex) {
    $error = $e->getMessage();
    echo $error;
  }

 ?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>

      <?php var_dump($_POST) ?>

    </pre>
  </body>
</html>
