<?php 
include "config.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of users</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Accounts</h2>
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Account Type</th>
                <th>Time of Creation</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody> 
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['accountType']; ?></td>
                            <td><?php echo $row['dt']; ?></td>
                            <td><a class="btn btn-info" href="update.php?ID=<?php echo $row['ID']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>
                            </tr>                    
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
        <div class="create" style="left: 50px">
            <a class = "btn btn-info" href="adduser.php">Add</a>
        </div>
    </div>
</body>
</html>