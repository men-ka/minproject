<!-- this is to edit games' details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $g_id = $_POST['g_id'];
        $g_name = $_POST['g_name'];
        $g_desc = $_POST['g_desc'];
        $g_img = $_POST['g_img']; 
        $sql = "UPDATE `games` SET `g_name`='$g_name',`g_desc`='$g_desc',`g_img`='$g_img' WHERE `g_id`='$g_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['g_id'])) {
        $g_id = $_GET['g_id']; 
        $sql = "SELECT * FROM `games` WHERE `g_id`='$g_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $g_name = $row['g_name'];            
                $g_desc = $row['g_desc'];
                $g_img = $row['g_img'];
                $g_id = $row['g_id'];
            }   
?>
    <h2>Game Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Game information:</legend>
            <label for="g_name">Technique Name:</label>
            <input type="text" id ="g_name" name="g_name" value="<?php echo $g_name; ?>">
            <input type="hidden" name="g_id" value="<?php echo $g_id; ?>">
            <br><br>
            <label for="g_desc">Description:</label>
            <input type="g_desc" id="g_desc" name="g_desc" value="<?php echo $g_desc; ?>">
            <br><br>    
            <label>Image:</label><br>
            <input class="img" type="file" name="g_img"  accept="image/jpg, image/jpeg, image/png, image/svg" value="<?php echo $g_img; ?>">
            <img src="/imgs/<?php echo $g_img; ?>" width="250" height="150" >
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
        header('Location:games.php');
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