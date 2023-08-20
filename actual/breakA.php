<!-- php for upload form in musicA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $b_name= $_POST['b_name'];
        $b_link=$_POST['b_link'];

        $INSERT = mysqli_query($conn, "INSERT INTO `break` (b_name, b_link) values('$b_name', '$b_link')");  

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