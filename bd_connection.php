<?php

  $conn = new mysqli('us-cdbr-sl-dfw-01.cleardb.net', 'b28bb6fa080be3', '9288b65a87d9367 ', 'users');

  $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `points`) VALUES (NULL, 'Martin', '123456', 'micorreo@gmail.com', 0);";
  $result = $conn->query($sql);

  if($conn->connect_error){
    echo $error = $conn->connect_error;
  }

 ?>
