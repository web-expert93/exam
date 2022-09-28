<?php

if (isset($_POST["submit"])) {
	$imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $imageDir = "images/" . $imageName;
    move_uploaded_file($imageTmp, $imageDir);

	extract($_POST);
?>
	<body align="center">
		<img src="<?php echo $imageDir; ?>" width=200px height=200px style="border-radius:50%" alt="Preview Image">
		<h1>Personal Information</h1>
		<table border="0" align="center">
			<tr>
				<td>Name:</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Father's Name:</td>
				<td><?php echo $fatherName; ?></td>
			</tr>
			<tr>
				<td>Mother's Name:</td>
				<td><?php echo $motherName; ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Phone No:</td>
				<td><?php echo $phone; ?></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><?php echo $address; ?></td>
			</tr>
			<tr>
				<td>Date of birth:</td>
				<td><?php echo $birth; ?></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><?php if(isset($_POST['gender'])) echo $gender; ?></td>
			</tr>
			<tr>
				<td>Religion:</td>
				<td><?php echo $religion; ?></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td><?php echo $blood; ?></td>
			</tr>
		</table>
		<footer align="center"><a href="index.php">Go to Registration Form</a></footer>
	</body>
<?php
}
else
	header("location:index.php");
?>