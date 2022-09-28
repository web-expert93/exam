<?php

if(isset($_GET["teacherEmail"])){
    include_once("databaseConnect.php");
    extract($_GET);

    $delete = "DELETE FROM teacher WHERE teacherEmail='$teacherEmail'";
    $result = mysqli_query($conn, $delete);
    header("location:index.php?msg=Deleted record of ".$teacherEmail);
}
else
    header("location:index.php");
?>