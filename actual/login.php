<?php
  $conn = new mysqli('localhost','root','','d_db');
  if(!$conn){
    die("Error".mysqli_connect_error());
  }else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username= $_POST["lusername"];
      $password= $_POST["lpassword"];

      $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result=mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);

      if($count==1){
        header("Location: trylogin.html");
        exit();
      }
      else{
        echo '<script>alert("Invalid Email or Password")</script>';
      }
    }
  
  }
?>