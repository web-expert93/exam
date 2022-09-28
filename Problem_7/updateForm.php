<?php

if (isset($_GET["teacherEmail"])) {
	include_once("databaseConnect.php");
	extract($_GET);

	$fetch = "SELECT * FROM teacher WHERE teacherEmail='$teacherEmail'";
	$result = mysqli_query($conn, $fetch);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		extract($row);
?>
		<h1 align="center">Update Info</h1>
		<form action="updateDatabase.php?teacherEmail=<?php echo $teacherEmail; ?>" method="post">
			<table align="center" style="border: 0px solid; padding:10px">
				<tr>
					<td><label for="teacherName">Name:</label></td>
					<td><input type="text" id="teacherName" name="teacherName" value="<?php echo $teacherName; ?>" style="width:100%"></td>
				</tr>
				<tr>
					<td><label for="teacherDesignation">Designation:</label></td>
					<td>
						<select name="teacherDesignation" id="teacherDesignation" style="width:100%">
							<option value="Professor" <?php if ($teacherDesignation == "Professor") echo "selected"; ?>>Professor</option>
							<option value="Associate Professor" <?php if ($teacherDesignation == "Associate Professor") echo "selected"; ?>>Associate Professor</option>
							<option value="Assistant Professor" <?php if ($teacherDesignation == "Assistant Professor") echo "selected"; ?>>Assistant Professor</option>
							<option value="Lecturer" <?php if ($teacherDesignation == "Lecturer") echo "selected"; ?>>Lecturer</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="teacherDepartment">Department:</label></td>
					<td>
						<select name="teacherDepartment" id="teacherDepartment" style="width:100%">
							<option value="CSE" <?php if ($teacherDepartment == "CSE") echo "selected"; ?>>CSE</option>
							<option value="EEE" <?php if ($teacherDepartment == "EEE") echo "selected"; ?>>EEE</option>
							<option value="ESE" <?php if ($teacherDepartment == "ESE") echo "selected"; ?>>ESE</option>
							<option value="Statistics" <?php if ($teacherDepartment == "Statistics") echo "selected"; ?>>Statistics</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="update" value="Update" style="width:100%"></td>
				</tr>
			</table>
		</form>
<?php
	}
}
else
	header("location:index.php");
?>