<?php
include 'include/header.php';

include 'include/db.php';

if (isset($_GET['uid'])) {
	$uid = $_GET['uid'];
}

if (isset($_POST['update'])) {
	$status = $_POST['status'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST[mobile];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];

	$fname = $_FILES['img-file']['name'];
	$tname = $_FILES['img-file']['tmp_name'];
	move_uploaded_file($tname, "uploads/".$fname);

	$check = mysqli_query($conn, "UPDATE users SET status='$status', name='$name', username = '$username', email='$email', password='$password', mobile='$mobile', dob='$dob', gender='$gender', address='$address', image='$fname' WHERE id='$uid' ");

	if ($check == 1) {
		header("location:update-customer.php");
	}
}
$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$uid' ");
while ($data = mysqli_fetch_array($query)) {
?>


<section class="add-cust-section">
<br>
	<h1 class="text-center text-uppercase">edit <?php echo $data['name']; ?>'s details</h1>
	<center>
		<section class="inner-section">
			<form method="POST" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td><label>ID</label></td>
						<td><?php echo $data['id']; ?></td>
					</tr>

					<tr>
						<td><label>Status</label></td>
						<td><input type="text" name="status" value="<?php echo $data['status']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Username</label></td>
						<td><input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Email</label></td>
						<td><input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Password</label></td>
						<td><input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Mobile</label></td>
						<td><input type="number" name="mobile" value="<?php echo $data['mobile']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>DOB</label></td>
						<td><input type="date" name="dob" value="<?php echo $data['dob']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Gender</label></td>
						<td><input type="text" name="gender" value="<?php echo $data['gender']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Address</label></td>
						<td><input type="text" name="address" value="<?php echo $data['address']; ?>" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Image</label></td>
						<td><img src="<?php echo "uploads/".$data['image']; ?>" alt="image" height="20" width="20"></td>
					</tr>

					<tr>
						<td><label>Update Image</label></td>
						<td><input type="file" name="img-file"></td>
					</tr>

					<?php } ?>

					<tr>
						<td colspan="2">
							<br>
							<input type="submit" name="update" value="Update" class="btn btn-success">
							<a href="customer.php" class="btn btn-primary" role="button">Back</a>
							<br>
						</td>
					</tr>

				</table>
			</form>
		</section>
	</center>
</section>