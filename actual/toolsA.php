<!-- php for upload form in toolsA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $to_name= $_POST['to_name'];
        $to_desc=$_POST['to_desc'];
        $to_img= $_FILES["upload_img"]["name"];
        $to_img_size= $_FILES["upload_img"]["size"];
        $to_img_tmp = $_FILES["upload_img"]["tmp_name"];
        $image_folder='../imgs/'.$to_img;  

        if($to_img_size > 2000000){
            echo 'image is too large';
        }
        else{
            $INSERT = mysqli_query($conn, "INSERT INTO tools (to_name, to_desc, to_img)
                values('$to_name', '$to_desc','$to_img')");  

                if($INSERT){
                    move_uploaded_file($to_img_tmp,$image_folder);
                    echo 'product uploaded';
                }
                else{
                    echo 'product upload failed'; 
                }
        }

}
?>
<br>
<a href="toolsA.html"><button>Go back</button></a>