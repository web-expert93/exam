<style>
    input,select{
        width:100%;
    }
</style>

<h1 align="center">Personal Information</h1>

<form action="action.php" method="post" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <td><label for="fatherName">Father's Name:</label></td>
            <td><input type="text" id="fatherName" name="fatherName"></td>
        </tr>
        <tr>
            <td><label for="motherName">Mother's Name:</label></td>
            <td><input type="text" id="motherName" name="motherName"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="phone">Phone No:</label></td>
            <td><input type="tel" id="phone" name="phone"></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address"></td>
        </tr>
        <tr>
            <td><label for="birth">Date of birth:</label></td>
            <td><input type="date" id="birth" name="birth"></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" id="gender" name="gender" value="Male" style="width:5%">
                <label for="gender">Male</label>

                <input type="radio" id="gender" name="gender" value="Female" style="width:10%">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><label for="religion">Religion:</label></td>
            <td>
                <select name="religion" id="religion">
                    <option value="">Select Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="blood">Blood Group:</label></td>
            <td>
                <select name="blood" id="blood">
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
            </td>
        </tr>
        <tr>
            <td><label for="image">Profile Photo:</label></td>
            <td><input type="file" id="image" name="image"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>