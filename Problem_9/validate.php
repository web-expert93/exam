<?php

if (isset($_POST['submit'])) {
    extract($_POST);

    if (empty($employeeName) || empty($employeeJob) || empty($employeeWorkPlace) || empty($employeeSalary) || empty($employeeEmail) || empty($employeePhone) || empty($employeeAddress) || empty($employeeBirth) || empty($employeeGender) || empty($employeeReligion) || empty($employeeBlood)) {
?>
        <script>
            window.alert("Fields can not be empty");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $employeeName)) {
    ?>
        <script>
            window.alert("Only alphabets and whitespace are allowed");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $employeeJob)) {
        ?>
            <script>
                window.alert("Only alphabets and whitespace are allowed");
                window.location = "index.php";
            </script>
        <?php
            exit();
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $employeeWorkPlace)) {
    ?>
        <script>
            window.alert("Only alphabets and whitespace are allowed");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }
    if ($employeeSalary <= 0) {
    ?>
        <script>
            window.alert("Salary must be positive");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }
    if (!filter_var($employeeEmail, FILTER_VALIDATE_EMAIL)) {
    ?>
        <script>
            window.alert("Invalid email");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }
    if (!preg_match("/^(01)([0-9]{9})$/", $employeePhone)) {
    ?>
        <script>
            window.alert("Phone no must be 11 digits & start with 01");
            window.location = "index.php";
        </script>
    <?php
        exit();
    }

    ?>
    <script>
        window.alert("Successfully validated");
        window.location = "index.php";
    </script>

<?php
}
else
    header("location:index.php");
?>