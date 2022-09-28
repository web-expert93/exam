<script src="jsValidation.js"></script>
<style>
    span{
        color: red;
    }
</style>
<body align="center">
    <h2>Registration Form</h2>

    <form action="insertDatabase.php" method="post" onsubmit="return formValidate()">
        <table align="center">
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" id="username" name="username" oninput="userValidate()"><span id="userErr"></span></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" oninput="passValidate()"><span id="passErr"></span></td>
            </tr>
            <tr>
                <td><label for="cPassword">Confirm Password:</label></td>
                <td><input type="password" id="cPassword" name="cPassword" oninput="cPassValidate()"><span id="cPassErr"></span></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" oninput="emailValidate()"><span id="emailErr"></span></td>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" oninput="nameValidate()"><span id="nameErr"></span></td>
            </tr>
            <tr>
                <td><label for="contact">Contact no:</label></td>
                <td><input type="tel" id="contact" name="contact" oninput="contactValidate()"><span id="contactErr"></span></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="register" value="Register" style="width:100%"></td>
            </tr>
        </table>
    </form>

    <footer><a href="index.php">Go to Login page</a></footer>
</body>