<script src="validate.js"></script>

<style>
    span{
        color:red;
    }
</style>

<h2 align="center">Employee's Profile</h2>

<form name="form" action="submit.php" method="post" onsubmit="return validation()">
    <table align="center">
        <tr>
            <td><label for="employeeName"></label>Name:</td>
            <td><input type="text" id="employeeName" name="employeeName"><span id="nameErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeJob">Job Title:</label></td>
            <td><input type="text" id="employeeJob" name="employeeJob"><span id="jobErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeWorkPlace">Work Place:</label></td>
            <td><input type="text" id="employeeWorkPlace" name="employeeWorkPlace"><span id="workErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeSalary">Salary:</label></td>
            <td><input type="number" id="employeeSalary" name="employeeSalary"><span id="salaryErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeEmail">Email:</label></td>
            <td><input type="email" id="employeeEmail" name="employeeEmail"><span id="emailErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeePhone">Phone no:</label></td>
            <td><input type="phone" id="employeePhone" name="employeePhone"><span id="phoneErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeAddress">Address:</label></td>
            <td><input type="text" id="employeeAddress" name="employeeAddress"><span id="addressErr"></span></td>
        </tr>
        <tr>
            <td><label for="employeeBirth">Date of Birth:</label></td>
            <td><input type="date" id="employeeBirth" name="employeeBirth"><span id="birthErr"></span></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>    
                <input type="radio" id="male" name="employeeGender" value="Male">
                <label for="male">Male</label>    
                <input type="radio" id="female" name="employeeGender" value="Female">
                <label for="female">Female</label>
                <span id="genderErr"></span>
            </td>
        </tr>
        <tr>
            <td><label for="employeeReligion">Religion:</label></td>
            <td>
                <select name="employeeReligion" id="employeeReligion">
                    <option value="">Choose an option</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddha">Buddha</option>
                </select>
                <span id="religionErr"></span>
            </td>
        </tr>
        <tr>
            <td><label for="employeeBlood">Blood Group:</label></td>
            <td>
                <select name="employeeBlood" id="employeeBlood">
                    <option value="">Choose an option</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <span id="bloodErr"></span>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" style="width:100%"></td>
        </tr>
    </table>
</form>