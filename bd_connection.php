<?php

  $conn = new mysqli('us-cdbr-sl-dfw-01.cleardb.net', 'b28bb6fa080be3', '9288b65a87d9367 ', 'users');

  if($conn->connect_error){
    echo $error = $conn->connect_error;
  }


 ?>
