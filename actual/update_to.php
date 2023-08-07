<!-- this is to edit tools' details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $to_id = $_POST['to_id'];
        $to_name = $_POST['to_name'];
        $to_desc = $_POST['to_desc'];
        $to_img = $_POST['to_img']; 
        $sql = "UPDATE `tools` SET `to_name`='$to_name',`to_desc`='$to_desc',`to_img`='$to_img' WHERE `to_id`='$to_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['to_id'])) {
        $to_id = $_GET['to_id']; 
        $sql = "SELECT * FROM `tools` WHERE `to_id`='$to_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $to_name = $row['to_name'];            
                $to_desc = $row['to_desc'];
                $to_img = $row['to_img'];
                $to_id = $row['to_id'];
            }   
?>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Personal information:</legend>
            <label for="to_name">Technique Name:</label>
            <input type="text" id ="to_name" name="to_name" value="<?php echo $to_name; ?>">
            <input type="hidden" name="to_id" value="<?php echo $to_id; ?>">
            <br><br>
            <label for="to_desc">Description:</label>
            <input type="to_desc" id="to_desc" name="to_desc" value="<?php echo $to_desc; ?>">
            <br><br>    
            <label>Image:</label><br>
            <input class="img" type="file" name="to_img"  accept="image/jpg, image/jpeg, image/png, image/svg" value="<?php echo $to_img; ?>">
            <img src="/imgs/<?php echo $to_img; ?>" width="250" height="150" >
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
        header('Location:tools.php');
    }
?>
<style>
    button,#update{
        background-color:#5bc0de;
        color:#fff;
        border-color:#46b8da;
        padding: 6px 12px;
        border-radius: 5px;
        border-wto_idth: 0px;
    }
</style>