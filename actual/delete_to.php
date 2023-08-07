<!-- this is to delete a tool from db -->
<?php 

include "configA.php";

if (isset($_GET['to_id'])) {

    $id = $_GET['to_id'];

    $sql = "DELETE FROM `tools` WHERE `to_id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
<br>
<a href="tools.php"><button>Go back</button></a>
<style>
    a{
        text-decoration: none;
    }
    button{
        background-color:#5bc0de;
        color:#fff;
        border-color:#46b8da;
        padding: 6px 12px;
        border-radius: 5px;
        border-width: 0px;
    }
</style>