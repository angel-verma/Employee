<?php
include 'include/link.php';
session_start();
session_destroy();
if (!isset($_SESSION['cnm'])) {
	header("location:search-profile.php");
} else {
	$cid = $_SESSION['cnm'];
}

include 'include/db.php';
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$cid' ");
while ($data = mysqli_fetch_array($query)) {
?>


<br>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="text-center text-uppercase"><?php echo $data['name']; ?>'s profile</h3>
		</div>
		<br>
		<center>
			<section class="inner-section">
				<form method="POST">
					<table class="table">
						<tr>
							<img src="<?php echo "uploads/".$data['image']; ?>" alt="image" height="100" width="100">
						</tr>

						<tr>
							<td><label>ID</label></td>
							<td><?php echo $data['id']; ?></td>
						</tr>

						<tr>
							<td><label>Status</label></td>
							<td><?php echo $data['status']; ?></td>
						</tr>

						<tr>
							<td><label>Name</label></td>
							<td><?php echo $data['name']; ?></td>
						</tr>

						<tr>
							<td><label>Username</label></td>
							<td><?php echo $data['username']; ?></td>
						</tr>

						<tr>
							<td><label>Email</label></td>
							<td><?php echo $data['email']; ?></td>
						</tr>

						<tr>
							<td><label>Password</label></td>
							<td><?php echo $data['password']; ?></td>
						</tr>

						<tr>
							<td><label>Mobile</label></td>
							<td><?php echo $data['mobile']; ?></td>
						</tr>

						<tr>
							<td><label>DOB</label></td>
							<td><?php echo $data['dob']; ?></td>
						</tr>

						<tr>
							<td><label>Gender</label></td>
							<td><?php echo $data['gender']; ?></td>
						</tr>

						<tr>
							<td><label>Address</label></td>
							<td><?php echo $data['address']; ?></td>
						</tr>

						<?php } ?>

						<tr>
							<td colspan="2">
								<br>
								<a href="search-profile.php" class="btn btn-primary" role="button">Back</a>
								<br>
							</td>
						</tr>

					</table>
				</form>
			</section>
		</center>
	</div>
</div>
