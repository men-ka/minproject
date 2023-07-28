<?php
    include "config.php";
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $accountType = $_POST['atype']; 
            $sql = "INSERT INTO users (username,password,accountType) VALUES ('$username','$password','$accountType')"; 
            $result = $conn->query($sql);
            if ($result == TRUE) {
                header("Location: user.php");
                echo "Record added successfully";
            }else{
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h2>User Add</h2>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="radio" id="admin" name="atype" value="admin">
                <label for="admin">Admin</label>
                <input type="radio" id="user" name="atype" value="user">
                <label for="user">User</label>
            </div>
            <button type="submit" class="btn_submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>