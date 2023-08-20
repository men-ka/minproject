<!-- this is to edit videos' details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $v_id = $_POST['v_id'];
        $v_name = $_POST['v_name'];
        $v_link = $_POST['v_link'];
        $sql = "UPDATE `videos` SET `v_name`='$v_name',`v_link`='v_link' WHERE `v_id`='$v_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['v_id'])) {
        $v_id = $_GET['v_id']; 
        $sql = "SELECT * FROM `videos` WHERE `v_id`='$v_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $v_name = $row['v_name'];            
                $v_link = $row['v_link'];
                $v_id = $row['v_id'];
            }   
?>
    <h2>Videos Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Videos information:</legend>
            <label for="v_name">Video Name:</label>
            <input type="text" id ="v_name" name="v_name" value="<?php echo $v_name; ?>">
            <input type="hidden" name="v_id" value="<?php echo $v_id; ?>">
            <br><br>
            <label for="v_link">Link:</label>
            <input type="v_link" id="v_link" name="v_link" value="<?php echo $v_link; ?>">
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
        header('Location:videos.php');
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