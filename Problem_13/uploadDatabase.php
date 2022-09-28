<?php

include_once("databaseConnect.php");

if(isset($_POST["upload"])){
    // Image upload --->
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $imageDir = "images/".$imageName;
    move_uploaded_file($imageTmp, $imageDir);
    // Image upload --->

    extract($_POST);

    $insert = "INSERT INTO image
                    VALUES('$imageTitle', '$imageDir')";

    if(mysqli_query($conn, $insert)){
        header("location:index.php");
    }
    else{
        echo "Error uploading";
    }
}
else{
    header("location:uploadForm.php");
}

?>