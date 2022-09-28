<?php
if (isset($_POST['submit'])) {
    include_once("databaseConnect.php");

    $imageName = $_FILES['productImage']['name'];
    $imageTmp = $_FILES['productImage']['tmp_name'];

    $imageDir = "uploads/images/" . $imageName;

    move_uploaded_file($imageTmp, $imageDir);

    extract($_POST);

    $insert = "INSERT INTO `product`(`productName`, `productCategory`, `productPrice`, `productStock`, `productImage`, `productDescription`) 
                VALUES ('$productName','$productCategory','$productPrice','$productStock','$imageDir','$productDescription')";

    if (mysqli_query($conn, $insert)) {
        header("location:productList.php?insert=true");
    } else
        echo "Error inserting".mysqli_error($conn);
}
else
    header("location:index.php");
?>