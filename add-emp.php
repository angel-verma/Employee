<?php include 'include/header.php'; ?>

<?php
include 'include/db.php';

if (isset($_POST['submit'])) {
	$status = $_POST['status'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$fname = $_FILES['image-file']['name'];
	$tname = $_FILES['image-file']['tmp_name'];
	move_uploaded_file($tname, "uploads/".$fname);

	$query = mysqli_query($conn, "insert into users(status, name, username, email, password, mobile, dob, gender, address, date, image) value ('$status', '$name', '$username', '$email', '$password', '$mobile', '$dob', '$gender', '$address', NOW(), '$fname')") or die("Failed to connect to database".mysql_error());

	if ($query == 1) {
		echo "<br><br><center><h1>Data Submitted.</center></h1>";
	} else {
		echo "<h1>Error Occured !</h1>";
	}
}
?>

<section class="add-cust-section">
	<br>
	<h1 class="text-center text-uppercase"><b>Add Employee</b></h1>
	<center>
		<section class="inner-section">
			<form method="POST" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td><label class="control-label">Status <span class="text-danger"><b>*</b></span></label></td>
						<td>
						<input type="text" name="status" class="form-control" value="employee" readonly="readonly">
						</td>
					</tr>

					<tr>
						<td><label class="control-label">Name <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="text" name="name" placeholder="Enter Name" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">Username <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="text" name="username" placeholder="Enter Username" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">Email <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="email" name="email" placeholder="Enter Email" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">Password <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="password" name="password" placeholder="Enter Password" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">Mobile <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="number" name="mobile" placeholder="Enter Mobile" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">DOB <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="date" name="dob" placeholder="Enter DOB" class="form-control" required></td>
					</tr>

					<tr>
						<td><label class="control-label">Gender <span class="text-danger"><b>*</b></span></label></td>
						<td>
						Male <input type="radio" name="gender" value="Male">
						Female <input type="radio" name="gender" value="Female">
						</td>
					</tr>

					<tr>
						<td><label class="control-label">Address <span class="text-danger"><b>*</b></span></label></td>
						<td><textarea name="address" placeholder="Enter Address" class="form-control" required></textarea></td>
					</tr>

					<tr>
						<td><label class="control-label">Upload Image <span class="text-danger"><b>*</b></span></label></td>
						<td><input type="file" name="image-file" required></td>
					</tr>

					<tr>
						<td colspan="2">
							<input type="submit" name="submit" value="Add Employee" class="btn btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-primary">
							<a href="employee.php" class="btn btn-success" role="button">Back</a>
						</td>
					</tr>
				</table>
			</form>
		</section>
	</center>
</section>