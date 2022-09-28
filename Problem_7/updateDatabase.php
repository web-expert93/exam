<?php
include_once("databaseConnect.php");

if(isset($_POST["update"])){
    extract($_GET);
    extract($_POST);

    $fetch = "UPDATE teacher SET teacherName='$teacherName', teacherDesignation='$teacherDesignation', teacherDepartment='$teacherDepartment' WHERE teacherEmail='$teacherEmail'";
    $result = mysqli_query($conn, $fetch);

    header("location:index.php?msg=Updated record of ".$teacherEmail);
}
else
    header("location:index.php");
?>