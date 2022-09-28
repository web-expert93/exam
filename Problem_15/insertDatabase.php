<?php
if(isset($_POST['register'])){

    include_once("databaseConnect.php");
    extract($_POST);

    // Validation starts   ---->
                // Empty field check 
    if(empty($username) || empty($password) || empty($cPassword) || empty($email) || empty($name) || empty($contact)){
        ?>
        <script>
            window.alert("Fields can't be empty");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Username pattern matching
    if(!preg_match("/^[a-zA-Z_]*$/", $username)){
        ?>
        <script>
            window.alert("Username field should only contain alphabets & underscore");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Password pattern matching
    if(!preg_match("/^\w{8,}$/", $password)){
        ?>
        <script>
            window.alert("Password field should be at least 8 characters");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Password Confirm
    if($password != $cPassword){
        ?>
        <script>
            window.alert("Password field should be at least 8 characters");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }

            // Email pattern matching
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        ?>
        <script>
            window.alert("Invalid email");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Name pattern matching
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        ?>
        <script>
            window.alert("Name field should only contain alphabets & whitespace");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Contact pattern matching
    if(!preg_match("/^(01)([0-9]{9})$/", $contact)){
        ?>
        <script>
            window.alert("Phone no must be 11 digits & start with 01");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
            // Same email check
    $check = "SELECT * FROM user WHERE email='$email'";
    $checkResult = mysqli_query($conn, $check);
    if(mysqli_num_rows($checkResult) > 0){
        ?>
         <script>
            window.alert("Email is already taken");
            window.location = "registrationForm.php";
        </script>
        <?php
        exit();
    }
    

    // Validation ends     ---->

    $insert = "INSERT INTO user
                    VALUES('$username', $password, '$email', '$name', '$contact')";

    if(mysqli_query($conn, $insert)){
        header("location:index.php?insertMsg=true");
    }
    else{
        echo "Error inserting"; 
    }
}
else{
    header("location:index.php");
}

?>
