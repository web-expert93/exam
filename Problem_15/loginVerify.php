<?php

session_start();

if(isset($_POST['login'])){
    
    include_once("databaseConnect.php");
    extract($_POST);

    $fetch = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = mysqli_query($conn, $fetch);
    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        extract($row);

        $_SESSION["user"] = array("username" => $username, "email" => $email, "name" => "$name", "contact" => $contact);
        
        header("location:user.php?loginSuccessfulMsg=true");
    }
    else{
        header("location:index.php?loginFailMsg=true");
    }
}
else{
    header("location:index.php");
}

?>