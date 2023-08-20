<!-- this is to edit breaks' details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $b_id = $_POST['b_id'];
        $b_name = $_POST['b_name'];
        $b_link = $_POST['b_link'];
        $sql = "UPDATE `break` SET `b_name`='$b_name',`b_link`='b_link' WHERE `b_id`='$b_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['b_id'])) {
        $b_id = $_GET['b_id']; 
        $sql = "SELECT * FROM `videos` WHERE `b_id`='$b_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $b_name = $row['b_name'];            
                $b_link = $row['b_link'];
                $b_id = $row['b_id'];
            }   
?>
    <h2>Break Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Information:</legend>
            <label for="b_name">Name:</label>
            <input type="text" id ="b_name" name="b_name" value="<?php echo $b_name; ?>">
            <input type="hidden" name="b_id" value="<?php echo $b_id; ?>">
            <br><br>
            <label for="b_link">Link:</label>
            <input type="b_link" id="b_link" name="b_link" value="<?php echo $b_link; ?>">
            <br><br>
            <input type="submit" value="Update" name="update" id ="update">
            <button name="back" value="back">Back</button>
        </fieldset>
    </form> 
    </body>
    </html>
<?php
        } 
        else{ 
            header('Location: user.php');
        }
    }
    if(isset($_POST['back'])){
        header('Location:break.php');
    }
?>
<style>
    button,#update{
        background-color:#5bc0de;
        color:#fff;
        border-color:#46b8da;
        padding: 6px 12px;
        border-radius: 5px;
        border-width: 0px;
    }
</style>