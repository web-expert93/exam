<?php

if (isset($_POST['submit'])) {

    include_once("databaseConnect.php");
    extract($_POST);

    if(empty($studentName) || empty($studentDepartment) || empty($studentRoll) || empty($studentReg) || empty($studentEmail) || empty($studentPhone) || empty($studentAddress) || empty($studentBirth) || empty($studentGender) || empty($studentReligion) || empty($studentBlood)){
        ?>
        <script>
            window.alert("Fields can not be empty");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(!isset($_FILES["studentPhoto"])){
        ?>
        <script>
            window.alert("Image field is empty");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(!preg_match("/^[a-zA-Z ]*$/", $studentName)){
        ?>
        <script>
            window.alert("Only alphabets and whitespace are allowed");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(strlen($studentRoll) != 8 && $studentRoll <= 0){
        ?>
        <script>
            window.alert("Roll must be 8 digits & positive");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(strlen($studentReg) != 4 && $studentReg <= 0){
        ?>
        <script>
            window.alert("Roll must be 8 digits & positive");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(!filter_var($studentEmail, FILTER_VALIDATE_EMAIL)){
        ?>
        <script>
            window.alert("Invalid email");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if(!preg_match("/^(01)([0-9]{9})$/", $studentPhone)){
        ?>
        <script>
            window.alert("Phone no must be 11 digits & start with 01");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    // Image upload ->
    
    $imageName = $_FILES['studentPhoto']['name'];
    $imageSize = $_FILES['studentPhoto']['size'];
    $imageTmp = $_FILES['studentPhoto']['tmp_name'];
    $imageType = $_FILES['studentPhoto']['type'];
    $errors = false;

    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

    if ($imageExtension != "jpg" && $imageExtension != "jpeg" && $imageExtension != "png") {
        $errors = true;
        ?>
        <script>
            window.alert("Extension is not supported");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }
    if ($imageSize > 10000000) {
        $errors = true;
        ?>
        <script>
            window.alert("Size is more than 10 MB");
            window.location = "index.php";
        </script>
        <?php
        exit();
    }

    $imageNewName = basename($imageName);
    $imageDir = "uploads/images/" . $imageNewName;

    if (!$errors) {
        move_uploaded_file($imageTmp, $imageDir);

        // -> Image Upload

        $insert = "INSERT INTO student
			    VALUES('$studentName', '$studentDepartment', '$studentRoll', '$studentReg', '$studentEmail', '$studentPhone', '$studentAddress', '$studentBirth', '$studentGender', '$studentReligion', '$studentBlood', '$imageNewName')";

        if (mysqli_query($conn, $insert)){
            ?>
            <script>
                alert("Successfully inserted into the database");
            </script>
            <?php
        }     
        else
            echo "Error inserting record" . mysqli_error($conn);
    }
}
?>

<body align="center">
    <img src="<?php echo $imageDir; ?>" width=200px height=200px style="border-radius:50%" alt="Preview Image">
    <h1>Student Info Preview</h1>
    <table border="0" align="center">
        <tr>
            <td>Name:</td>
            <td><?php echo $studentName; ?></td>
        </tr>
        <tr>
            <td>Department:</td>
            <td><?php echo $studentDepartment; ?></td>
        </tr>
        <tr>
            <td>Roll no:</td>
            <td><?php echo $studentRoll; ?></td>
        </tr>
        <tr>
            <td>Registration no:</td>
            <td><?php echo $studentReg; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $studentEmail; ?></td>
        </tr>
        <tr>
            <td>Phone no:</td>
            <td><?php echo $studentPhone; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $studentAddress; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $studentBirth; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php if(isset($_POST["studentGender"])) echo $studentGender; ?></td>
        </tr>
        <tr>
            <td>Religion:</td>
            <td><?php echo $studentReligion; ?></td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td><?php echo $studentBlood; ?></td>
        </tr>
    </table>
</body>

<footer><a href="index.php">Go to Student Registration Page</a></footer>