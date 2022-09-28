<?php
$conn = mysqli_connect("localhost", "root", "", "labwork");

if(!$conn)
    die("Error connecting to database".mysqli_connect_error());
else
   // echo "Connected Successfully";
?>