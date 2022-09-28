<?php

session_start();

if(isset($_POST['login'])){
    
    include_once("databaseConnect.php");
    extract($_POST);

    $fetch = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($conn, $fetch);
    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_assoc($result);
        extract($row);

        $_SESSION["admin"] = array("username" => $username);
        
        header("location:admin.php?loginSuccessfulMsg=true");
    }
    else{
        header("location:index.php?loginFailMsg=true");
    }
}
else{
    header("location:index.php");
}

?>