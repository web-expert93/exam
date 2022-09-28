<?php

include_once("databaseConnect.php");

$fetch = "SELECT * FROM student";
$result = mysqli_query($conn, $fetch);

?>
    <h2 align="center">Student List</h2>
    <table border="1" align="center">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Roll no</th>
            <th>Registration no</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Blood Group</th>
            <th>Profile Photo</th>
        </tr>
<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        extract($row);
?>
        <tr align="center">
            <td><?php echo $studentName; ?></td>
            <td><?php echo $studentDepartment; ?></td>
            <td><?php echo $studentRoll; ?></td>
            <td><?php echo $studentReg; ?></td>
            <td><?php echo $studentEmail; ?></td>
            <td><?php echo $studentPhone; ?></td>
            <td><?php echo $studentAddress; ?></td>
            <td><?php echo $studentBirth; ?></td>
            <td><?php echo $studentGender; ?></td>
            <td><?php echo $studentReligion; ?></td>
            <td><?php echo $studentBlood; ?></td>
            <td align="center"><img src="../Problem_1/uploads/images/<?php echo $studentPhoto;?>" width=50px height=50px style="border-radius:50%" alt="Student Photo"></td>
        </tr>
<?php
    }
?>
    </table>
<?php
}
?>
