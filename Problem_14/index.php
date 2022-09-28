<h1 align="center">Admission Apply Form</h1>
<form action="profile.php" method="post" enctype="multipart/form-data">
    <table style="border:1px solid; padding:10px" align="center">
        <tr>
            <td><b>General Information:</b></td>
        </tr>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <td><label for="fatherName">Father's Name:</label></td>
            <td><input type="text" id="fatherName" name="fatherName"></td>
            <td><label for="motherName">Mother's Name:</label></td>
            <td><input type="text" id="motherName" name="motherName"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
            <td><label for="phone">Phone No:</label></td>
            <td><input type="tel" id="phone" name="phone"></td>
        </tr>
        <tr>
            <td><label for="birth">Date of birth:</label></td>
            <td><input type="date" id="birth" name="birth"></td>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address"></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" id="gender" name="gender" value="Male">
                <label for="gender">Male</label>

                <input type="radio" id="gender" name="gender" value="Female">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><b><br>SSC Information:</b></td>
        </tr>
        <tr>
            <td><label for="sRoll">Roll No:</label></td>
            <td><input type="text" id="sRoll" name="sRoll"></td>
            <td><label for="sReg">Registration No:</label></td>
            <td><input type="text" id="sReg" name="sReg"></td>
        </tr>
        <tr>
            <td><label for="sBoard">Board:</label></td>
            <td><input type="text" id="sBoard" name="sBoard"></td>
            <td><label for="sYear">Passing Year:</label></td>
            <td><input type="text" id="sYear" name="sYear"></td>
        </tr>
        <tr>
            <td><b><br>HSC Information:</b></td>
        </tr>
        <tr>
            <td><label for="hRoll">Roll No:</label></td>
            <td><input type="text" id="hRoll" name="hRoll"></td>
            <td><label for="hReg">Registration No:</label></td>
            <td><input type="text" id="hReg" name="hReg"></td>
        </tr>
        <tr>
            <td><label for="hBoard">Board:</label></td>
            <td><input type="text" id="hBoard" name="hBoard"></td>
            <td><label for="hYear">Passing Year:</label></td>
            <td><input type="text" id="hYear" name="hYear"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td><label for="image">Upload Photo:</label></td>
            <td><input type="file" id="image" name="image"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td align="center" colspan="4"><input type="submit" name="apply" value="Apply Here" style="width:100%"></td>
        </tr>
    </table>
</form>