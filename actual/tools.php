<!-- shows the list of tools from admin side -->
<?php 
include "configA.php";
$sql = "SELECT * FROM tools";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of tools</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Study tools</h2>
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody> 
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                            <td><?php echo $row['to_id']; ?></td>
                            <td><?php echo $row['to_name']; ?></td>
                            <td><?php echo $row['to_desc']; ?></td>
                            <td><img src="/imgs/<?php echo $row['to_img']; ?>" width="250" height="150" ></td>
                            <td><a class="btn btn-info" href="update_to.php?to_id=<?php echo $row['to_id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete_to.php?to_id=<?php echo $row['to_id']; ?>">Delete</a></td>
                            </tr>                    
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
        <div class="create" style="left: 50px">
            <a class = "btn btn-info" href="toolsA.html">Add</a>
            <a class = "btn btn-info" href="contents.html">Back</a>
        </div>
    </div>
</body>
</html>