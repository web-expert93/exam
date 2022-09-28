<?php

if (isset($_POST['submit'])) {

    include_once("databaseConnect.php");

    $imageName = $_FILES['productImage']['name'];
    $imageTmp = $_FILES['productImage']['tmp_name'];

    $imageDir = "images/".$imageName;

    move_uploaded_file($imageTmp, $imageDir);

    extract($_POST);

    $insert = "INSERT INTO `electronics`(`productName`, `productCategory`, `productPrice`, `productStock`, `productImage`, `productDescription`) 
                VALUES ('$productName','$productCategory','$productPrice','$productStock','$imageDir','$productDescription')";

    if (mysqli_query($conn, $insert)) {
        ?>
            <script>
                window.alert("Inserted into the database");
                window.location = "index.php";
            </script>
        <?php
    } else
        echo "Error inserting".mysqli_error($conn);
}
else
    header("location:index.php");
?>
