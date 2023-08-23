<?php
  $conn = new mysqli('localhost','root','','d_db');
  if(!$conn){
    die("Error".mysqli_connect_error());
  }else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username= $_POST["lusername"];
      $password= $_POST["lpassword"];

      $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $accountType = $row['accountType'];
            } 
          if($accountType=='admin'){
            header("Location: desktopA.html");
          }else{
            header("Location: desktop1.html");
          }
          exit();
        }
        else{
          echo '<script>alert("Invalid Email or Password")</script>';
        }  
    }
  
  }
?>
