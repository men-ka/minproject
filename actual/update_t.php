<!-- this is to edit techniques' details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $t_id = $_POST['t_id'];
        $t_name = $_POST['t_name'];
        $t_desc = $_POST['t_desc'];
        $t_img = $_POST['t_img']; 
        $sql = "UPDATE `techniques` SET `t_name`='$t_name',`t_desc`='$t_desc',`t_img`='$t_img' WHERE `t_id`='$t_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['t_id'])) {
        $t_id = $_GET['t_id']; 
        $sql = "SELECT * FROM `techniques` WHERE `t_id`='$t_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $t_name = $row['t_name'];            
                $t_desc = $row['t_desc'];
                $t_img = $row['t_img'];
                $t_id = $row['t_id'];
            }   
?>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Personal information:</legend>
            <label for="t_name">Technique Name:</label>
            <input type="text" id ="t_name" name="t_name" value="<?php echo $t_name; ?>">
            <input type="hidden" name="t_id" value="<?php echo $t_id; ?>">
            <br><br>
            <label for="t_desc">Description:</label>
            <input type="t_desc" id="t_desc" name="t_desc" value="<?php echo $t_desc; ?>">
            <br><br>    
            <label>Image:</label><br>
            <input class="img" type="file" name="t_img"  accept="image/jpg, image/jpeg, image/png, image/svg" value="<?php echo $t_img; ?>">
            <img src="/imgs/<?php echo $t_img; ?>" width="250" height="150" >
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
        header('Location:techniques.php');
    }
?>
<style>
    button,#update{
        background-color:#5bc0de;
        color:#fff;
        border-color:#46b8da;
        padding: 6px 12px;
        border-radius: 5px;
        border-wt_idth: 0px;
    }
</style>