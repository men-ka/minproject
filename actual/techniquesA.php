<!-- php for upload form in techniquesA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $t_name= $_POST['t_name'];
        $t_desc=$_POST['t_desc'];
        $t_img= $_FILES["upload_img"]["name"];
        $t_img_size= $_FILES["upload_img"]["size"];
        $t_img_tmp = $_FILES["upload_img"]["tmp_name"];
        $image_folder='../imgs/'.$t_img;  

        if($t_img_size > 2000000){
            echo 'image is too large';
        }
        else{
            $INSERT = mysqli_query($conn, "INSERT INTO techniques (t_name, t_desc, t_img)
                values('$t_name', '$t_desc','$t_img')");  

                if($INSERT){
                    move_uploaded_file($t_img_tmp,$image_folder);
                    echo 'product uploaded';
                }
                else{
                    echo 'product upload failed'; 
                }
        }

}
?>
<br>
<a href="techniquesA.html"><button>Go back</button></a>