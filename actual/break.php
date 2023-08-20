<!-- shows the list of break from admin side -->
<?php 
include "configA.php";
$sql = "SELECT * FROM `break`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of things for taking a Break </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Take a break</h2>
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Link</th>
            </tr>
            </thead>
            <tbody> 
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                            <td><?php echo $row['b_id']; ?></td>
                            <td><?php echo $row['b_name']; ?></td>
                            <td><?php echo $row['b_link']; ?></td>
                            <td><a class="btn btn-info" href="update_b.php?b_id=<?php echo $row['b_id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete_b.php?b_id=<?php echo $row['b_id']; ?>">Delete</a></td>
                            </tr>                    
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
        <div class="create" style="left: 50px">
            <a class = "btn btn-info" href="breakA.html">Add</a>
            <a class = "btn btn-info" href="contents.html">Back</a>
        </div>
    </div>
</body>
</html>