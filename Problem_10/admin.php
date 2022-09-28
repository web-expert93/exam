<?php

session_start();
if(isset($_SESSION["admin"])){
    extract($_SESSION["admin"]);
?>

<body align="center">
    <?php
        if(isset($_GET["loginSuccessfulMsg"])){
            ?>
            <h3 style="color:green">Logged in Successfully</h3>
            <?php
        }
    ?>
    
    <h2>Hello admin <?php echo $username; ?> </h2>

    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

<?php

    if (isset($_POST["logout"])) {
     session_destroy();
     header("location:index.php?logoutMsg=true");
    }
}
else{
    header("location:index.php");
}
?>