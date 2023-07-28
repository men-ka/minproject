<?php
  $conn = new mysqli('localhost','root','','d_db');
  if(!$conn){
    die("Error".mysqli_connect_error());
  }
$showAlert = false;
$showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username= $_POST["susername"];
    $password= $_POST["spassword"];
    $cpassword= $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword && $exists==false)){
      $sql ="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
        $showAlert = true;
        echo 'Account created succesfully';
      }
    }else{
      $showError = "Passwords do not match";
    }
  }
?>