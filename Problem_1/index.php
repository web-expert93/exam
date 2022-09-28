<script src="formValidation.js"></script>

<style>
    span{
        color:red;
    }
    select{
        width:170px;
    }
</style>
<h1 align="center">Student Information</h1>

<form name="form" action="insertDatabase.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
    <table align="center">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="studentName"><span id="nameErr"></span></td>
            
        </tr>
        <tr>
            <td><label for="department">Department:</label></td>
            <td>
				<select name="studentDepartment" id="department">
					<option value="">Select a department</option>
					<option value="CSE">CSE</option>
					<option value="EEE">EEE</option>
					<option value="ESE">ESE</option>
					<option value="Statistics">Statistics</option>
				</select>
                <span id="departmentErr"></span>
			</td>
        </tr>
        <tr>
            <td><label for="roll">Roll no:</label></td>
            <td><input type="number" id="roll" name="studentRoll"><span id="rollErr"></span></td>
        </tr>
		<tr>
            <td><label for="reg">Registration no:</label></td>
            <td><input type="number" id="reg" name="studentReg"><span id="regErr"></span></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="studentEmail"><span id="emailErr"></span></td>
        </tr>
        <tr>
            <td><label for="phone">Phone No:</label></td>
            <td><input type="tel" id="phone" name="studentPhone"><span id="phoneErr"></span></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="studentAddress"><span id="addressErr"></span></td>
        </tr>
        <tr>
            <td><label for="birth">Date of birth:</label></td>
            <td><input type="date" id="birth" name="studentBirth"><span id="birthErr"></span></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" id="gender" name="studentGender" value="Male">
                <label for="gender">Male</label>

                <input type="radio" id="gender" name="studentGender" value="Female">
                <label for="gender">Female</label>
                <span id="genderErr"></span>
            </td>
        </tr>
        <tr>
            <td><label for="religion">Religion:</label></td>
            <td>
                <select name="studentReligion" id="religion">
                    <option value="">Select Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddha">Buddha</option>
                </select>
                <span id="religionErr"></span>
            </td>
        </tr>
        <tr>
            <td><label for="blood">Blood Group:</label></td>
            <td>
                <select name="studentBlood" id="blood">
                    <option value="">Select blood group</option>
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
            <td><label for="image">Profile Photo:</label></td>
            <td><input type="file" id="image" name="studentPhoto"><span id="imageErr"></span></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" style="width:100%"></td>
        </tr>
    </table>
</form>

