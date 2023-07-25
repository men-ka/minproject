<?php
  $login = false;
  $showError = false;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    @include 'config.php';
    $username= $_POST["lusername"];
    $password= $_POST["lpassword"];
    $exists=false;
  
    $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num = mysqli_num_query($result);
    if($num==1){
      $login = true;
    }
    
    else{
      $showError = "Invalid credentials";
    }
  }
?>
