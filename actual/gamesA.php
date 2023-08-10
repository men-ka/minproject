<!-- php for upload form in gamesA.html -->
<?php

include "configA.php";

if(isset($_POST['upload'])){

        $g_name= $_POST['g_name'];
        $g_desc=$_POST['g_desc'];
        $g_img= $_FILES["upload_img"]["name"];
        $g_img_size= $_FILES["upload_img"]["size"];
        $g_img_tmp = $_FILES["upload_img"]["tmp_name"];
        $image_folder='../imgs/'.$g_img;  

        if($g_img_size > 2000000){
            echo 'image is too large';
        }
        else{
            $INSERT = mysqli_query($conn, "INSERT INTO games (g_name, g_desc, g_img)
                values('$g_name', '$g_desc','$g_img')");  

                if($INSERT){
                    move_uploaded_file($g_img_tmp,$image_folder);
                    echo 'content uploaded';
                }
                else{
                    echo 'content upload failed'; 
                }
        }

}
?>
<br>
<a href="gamesA.html"><button>Go back</button></a>