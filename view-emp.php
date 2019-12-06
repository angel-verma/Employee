<?php include 'include/link.php'; ?>

<h2 class="text-center">Employee Details</h2>
<table class="table table-bordered table-hover table-condenced">
	<tr class="active">
		<td><label>ID</label></td>
		<td><label class="text-uppercase">status</label></td>
		<td><label class="text-uppercase">name</label></td>
		<td><label class="text-uppercase">username</label></td>
		<td><label class="text-uppercase">email</label></td>
		<td><label class="text-uppercase">password</label></td>
		<td><label class="text-uppercase">mobile</label></td>
		<td><label class="text-uppercase">dob</label></td>
		<td><label class="text-uppercase">gender</label></td>
		<td><label class="text-uppercase">address</label></td>
		<td><label class="text-uppercase">date</label></td>
		<td><label class="text-uppercase">image</label></td>
		<td><label class="text-uppercase">download</label></td>
	</tr>

	<?php
	include 'include/db.php';
	$query = mysqli_query($conn, "select * from users WHERE status='employee'");

	while ($data = mysqli_fetch_array($query)) {
	?>

	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['status']; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['password']; ?></td>
		<td><?php echo $data['mobile']; ?></td>
		<td><?php echo $data['dob']; ?></td>
		<td><?php echo $data['gender']; ?></td>
		<td><?php echo $data['address']; ?></td>
		<td><?php echo $data['date']; ?></td>
		<td><img src="<?php echo "uploads/".$data['image']; ?>" alt="" height="20" width="20" /></td>
		<td><a href="<?php echo "uploads/".$data['image']; ?>" download>Download</a></td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="13">
			<a href="employee.php" class="btn btn-success" role="button">Back</a>
		</td>
	</tr>
</table>