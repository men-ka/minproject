<!-- php for upload form in musicA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $m_name= $_POST['m_name'];
        $m_link=$_POST['m_link'];

        $INSERT = mysqli_query($conn, "INSERT INTO music (m_name, m_link) values('$m_name', '$m_link')");  

        if($INSERT){
                echo 'content uploaded';
        }
        else{
               echo 'content upload failed'; 
        }

}
?>
<br>
<a href="musicA.html"><button>Go back</button></a>