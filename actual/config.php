<?php
  $conn = mysqli_connect('localhost','root','','d_db');
  if(!$conn){
    die("Error".mysqli_connect_error());
  }
?>
