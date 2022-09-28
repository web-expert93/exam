<?php

if(isset($_POST['submit'])){
    include_once("databaseConnect.php");
    extract($_POST);

    $insert = "INSERT INTO employee(`employeeName`, `employeeJob`, `employeeWorkPlace`, `employeeSalary`, `employeeEmail`, `employeePhone`, `employeeAddress`, `employeeBirth`, `employeeGender`, `employeeReligioin`, `employeeBlood`) 
                    VALUES ('$employeeName','$employeeJob','$employeeWorkPlace','$employeeSalary','$employeeEmail','$employeePhone','$employeeAddress','$employeeBirth','$employeeGender','$employeeReligion','$employeeBlood')";
        
    if(mysqli_query($conn, $insert)){
        header("location:index.php?insert=true");
    }
    else
        echo "Error inserting".mysqli_error($conn);
}
else
    header("location:index.php");

?>