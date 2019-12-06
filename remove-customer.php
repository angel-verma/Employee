<?php include 'include/link.php'; ?>
<h2 class="text-center">Remove Customer</h2>
<form method="POST">
	<table class="table table-bordered table-hover table-condenced">
		<tr class="active">
			<td><label>ID</label></td>
			<td><label class="text-uppercase">Status</label></td>
			<td><label class="text-uppercase">name</label></td>
			<td><label class="text-uppercase">username</label></td>
			<td><label class="text-uppercase">email</label></td>
			<td><label class="text-uppercase">password</label></td>
			<td><label class="text-uppercase">mobile</label></td>
			<td><label class="text-uppercase">dob</label></td>
			<td><label class="text-uppercase">gender</label></td>
			<td><label class="text-uppercase">address</label></td>
			
			<td><label class="text-uppercase">image</label></td>
			<td><label class="text-uppercase">delete</label></td>
			<td><label class="text-uppercase">link</label></td>
		</tr>
		<?php
			include 'include/db.php';

			if (isset($_GET['uid'])) {
				$uid = $_GET['uid'];
				mysqli_query($conn, "delete from users WHERE id='$uid'");
			}

			if (isset($_POST['del'])) {
				$id = $_POST['check'];
				foreach ($id as $key) {
					mysqli_query($conn, "delete from users WHERE id='$key'");
				}
			}
			$query = mysqli_query($conn, "select * from users WHERE status='customer'") or die("Failed to connect");
			while ($data = mysqli_fetch_array($query)){
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
			
			<td><?php echo $data['image']; ?></td>
			<td><input type="checkbox" name="check[]" value="<?php echo $data['id']?>"></td>
			<td><a href="remove-customer.php?uid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="12">
				<input type="submit" name="del" value="Delete" class="btn btn-success">
				<a href="customer.php" class="btn btn-success" role="button">Back</a>
			</td>
		</tr>
	</table>
</form>