<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $id = $_POST['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $accountType = $_POST['accountType']; 
        $sql = "UPDATE `users` SET `username`='$username',`password`='$password',`accountType`='$accountType' WHERE `ID`='$id'"; 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    if (isset($_GET['ID'])) {
        $id = $_GET['ID']; 
        $sql = "SELECT * FROM `users` WHERE `ID`='$id'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $username = $row['username'];            
                $password  = $row['password'];
                $accountType = $row['accountType'];
                $id = $row['ID'];
            }   
?>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Personal information:</legend>
            Username:<br>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <input type="hidden" name="ID" value="<?php echo $id; ?>">
            <br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            Account Type:<br>
            <input type="radio" name="accountType" value="admin" <?php if($accountType == 'admin'){ echo "checked";} ?>>Admin
            <input type="radio" name="accountType" value="user" <?php if($accountType == 'user'){ echo "checked";} ?>>User
            <br><br>
            <input type="submit" value="Update" name="update">
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
        header('Location:user.php');
    }
?>