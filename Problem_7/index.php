<?php

include_once("databaseConnect.php");

$fetch = "SELECT * FROM teacher";
$result = mysqli_query($conn, $fetch);

if (isset($_GET['msg'])){
	?>
	<h2 align="center" style="color:green"><?php echo $_GET['msg'];?></h2>
	<?php
}

?>

<h1 align="center">Teacher Information</h1>

<table border="1" align="center">
	<tr align="center">
		<th>Name</th>
		<th>Designation</th>
		<th>Department</th>
		<th>Email</th>
		<th colspan="2">Apply</th>
	</tr>
	<?php
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			extract($row);
	?>
			<tr align="center">
				<td><?php echo $teacherName; ?></td>
				<td><?php echo $teacherDesignation; ?></td>
				<td><?php echo $teacherDepartment; ?></td>
				<td><?php echo $teacherEmail; ?></td>
				<td>
					<button type="submit"><a href="updateForm.php?teacherEmail=<?php echo $teacherEmail; ?>">Update</a></button>
				</td>
				<td>
					<button type="submit"><a href="deleteDatabase.php?teacherEmail=<?php echo $teacherEmail; ?>">Delete</a></button>
				</td>
			</tr>

		<?php
		}
		?>
</table>
<?php
	}
?>