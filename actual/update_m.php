<!-- this is to edit music's details -->
<?php 
include "configA.php";
    if (isset($_POST['update'])) {
        $m_id = $_POST['m_id'];
        $m_name = $_POST['m_name'];
        $m_link = $_POST['m_link'];
        $sql = "UPDATE `music` SET `m_name`='$m_name',`m_link`='m_link' WHERE `m_id`='$m_id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['m_id'])) {
        $m_id = $_GET['m_id']; 
        $sql = "SELECT * FROM `music` WHERE `m_id`='$m_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $m_name = $row['m_name'];            
                $m_link = $row['m_link'];
                $m_id = $row['m_id'];
            }   
?>
    <h2>Music Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Music information:</legend>
            <label for="m_name">Music Name:</label>
            <input type="text" id ="m_name" name="m_name" value="<?php echo $m_name; ?>">
            <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
            <br><br>
            <label for="m_link">Link:</label>
            <input type="m_link" id="m_link" name="m_link" value="<?php echo $m_link; ?>">
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
        header('Location:music.php');
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