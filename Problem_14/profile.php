<?php

if (isset($_POST["apply"])) {

    $imageName = $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];

    $imageDir = "images/" . $imageName;
    move_uploaded_file($imageTmp, $imageDir);
    extract($_POST);

?>
    <body align="center">
        <h2>Profile Preview</h2>
        <img src="<?php echo $imageDir; ?>" width="150px" height="150px" style="border-radius:50%">
        <table align="center">
            <tr>
                <td><b><br>General Information</b></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Father's name:</td>
                <td><?php echo $fatherName; ?></td>
            </tr>
            <tr>
                <td>Mother's name:</td>
                <td><?php echo $motherName; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <td>Phone No:</td>
            <td><?php echo $phone; ?></td>
            <tr>
                <td>Date of Birth:</td>
                <td><?php echo $birth; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php if(isset($gender)) echo $gender; ?></td>
            </tr>
            <tr>
                <td><b><br>SSC Information</b></td>
            </tr>
            <tr>
                <td>Roll No:</td>
                <td><?php echo $sRoll; ?></td>
            </tr>
            <tr>
                <td>Registration No:</td>
                <td><?php echo $sReg; ?></td>
            </tr>
            <tr>
                <td>Board:</td>
                <td><?php echo $sBoard; ?></td>
            </tr>
            <tr>
                <td>Passing Year:</td>
                <td><?php echo $sYear; ?></td>
            </tr>
            <tr>
                <td><b><br>HSC Information</b></td>
            </tr>
            <tr>
                <td>Roll No:</td>
                <td><?php echo $hRoll; ?></td>
            </tr>
            <tr>
                <td>Registration No:</td>
                <td><?php echo $hReg; ?></td>
            </tr>
            <tr>
                <td>Board:</td>
                <td><?php echo $hBoard; ?></td>
            </tr>
            <tr>
                <td>Passing Year:</td>
                <td><?php echo $hYear; ?></td>
            </tr>
        </table>
        <footer><a href="index.php">Apply for Admission</a></footer>
    </body>

<?php
} 
else
    header("location:index.php");

?>