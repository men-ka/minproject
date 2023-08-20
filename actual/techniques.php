<?php 
include "configA.php";
$sql = "SELECT * FROM techniques";
$result = $conn->query($sql);
?>

<!-- this shows the list of techniques from Admin side -->
<!DOCTYPE html>
<html>
<head>
    <title>List of Techniques</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Study Techniques</h2>
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
                            <td><?php echo $row['t_id']; ?></td>
                            <td><?php echo $row['t_name']; ?></td>
                            <td><?php echo $row['t_desc']; ?></td>
                            <td><img src="/imgs/<?php echo $row['t_img']; ?>" width="250" height="150" ></td>
                            <td><a class="btn btn-info" href="update_t.php?t_id=<?php echo $row['t_id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete_t.php?t_id=<?php echo $row['t_id']; ?>">Delete</a></td>
                            </tr>                    
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
        <div class="create" style="left: 50px">
            <a class = "btn btn-info" href="techniquesA.html">Add</a>
            <a class = "btn btn-info" href="contents.html">Back</a>
        </div>
    </div>
</body>
</html>