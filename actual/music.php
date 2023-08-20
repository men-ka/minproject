<!-- shows the list of Music from admin side -->
<?php 
include "configA.php";
$sql = "SELECT * FROM music";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Music</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Music</h2>
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
                            <td><?php echo $row['m_id']; ?></td>
                            <td><?php echo $row['m_name']; ?></td>
                            <td><?php echo $row['m_link']; ?></td>
                            <td><a class="btn btn-info" href="update_m.php?m_id=<?php echo $row['m_id']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" href="delete_m.php?m_id=<?php echo $row['m_id']; ?>">Delete</a></td>
                            </tr>                    
                <?php       }
                    }
                ?>                
            </tbody>
        </table>
        <div class="create" style="left: 50px">
            <a class = "btn btn-info" href="musicA.html">Add</a>
            <a class = "btn btn-info" href="contents.html">Back</a>
        </div>
    </div>
</body>
</html>