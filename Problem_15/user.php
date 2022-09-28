<?php

session_start();
if(isset($_SESSION["user"])){
    extract($_SESSION["user"]);
?>

<body align="center">
    <?php
        if(isset($_GET["loginSuccessfulMsg"])){
            ?>
            <h3 style="color:green">Logged in Successfully</h3>
            <?php
        }
    ?>
    
    <h2>Hello <?php echo $name; ?> </h2>
    <table align="center">
        <tr>
            <td>Username:</td>
            <td><?php echo $username; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Contact:</td>
            <td><?php echo $contact; ?></td>
        </tr>
    </table>

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