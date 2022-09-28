<body align="center">
<?php
    session_start();

    if(isset($_SESSION["admin"])){
        header("location:admin.php");
    } 
    else{
        if(isset($_GET["loginFailMsg"])){
            ?>
                <h3 style="color:red">Login Information did not match</h3>
            <?php
        } 
        else if(isset($_GET["logoutMsg"])){
            ?>
              <h3 style="color:green">Logout successfully</h3>
            <?php
        } 
?>
        <h2>Login</h2>

        <form action="loginVerify.php" method="post">
            <table align="center">
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="login" value="Login" style="width:100%"></td>
                </tr>
            </table>
        </form>
</body>

    <?php
    }
?>