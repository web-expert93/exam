<?php

if(isset($_GET["studentReg"])){
    include("databaseConnect.php");
    extract($_GET);

    $delete = "DELETE FROM student WHERE studentReg=$studentReg";
    mysqli_query($conn, $delete);

    header("location:index.php?deleteInfo=".$studentReg);
}
else
    header("location:index.php");
?>