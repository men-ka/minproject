<!-- php for upload form in musicA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $v_name= $_POST['v_name'];
        $v_link=$_POST['v_link'];

        $INSERT = mysqli_query($conn, "INSERT INTO videos (v_name, v_link) values('$v_name', '$v_link')");  

        if($INSERT){
                echo 'content uploaded';
        }
        else{
               echo 'content upload failed'; 
        }

}
?>
<br>
<a href="videosA.html"><button>Go back</button></a>