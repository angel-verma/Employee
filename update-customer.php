<?php include 'include/link.php'; ?>
<style>
	input[type=text] {
		width: 100px;
	}
</style>

<h2 class="text-center">Update Customer Information</h2>
<form method="POST" enctype="multipart/form-data">
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
			
			<td><label class="text-uppercase">image</label></td>
			<td><label class="text-uppercase">update</label></td>
			<td><label class="text-uppercase">update link</label></td>
			<td><label class="text-uppercase">add multi-image</label></td>
			<td><label class="text-uppercase">view gallery</label></td>
		</tr>
		<?php
		include 'include/db.php';

		

		if (isset($_POST['update'])) {
			$id = $_POST['check'];
			foreach ($id as $key) {
				$status = $_POST['status'.$key];
				$name = $_POST['name'.$key];
				$username = $_POST['username'.$key];
				$email = $_POST['email'.$key];
				$password = $_POST['password'.$key];
				$mobile = $_POST['mobile'.$key];
				$dob = $_POST['dob'.$key];
				$gender = $_POST['gender'.$key];
				$address = $_POST['address'.$key];

				mysqli_query($conn, "update users set status='$status', name='$name', username='$username', email='$email', password='$password', mobile='$mobile', dob='$dob', gender='$gender', address='$address' WHERE id='$key'");
			}
			echo "<center class='text-success'><h4><b>Data updated successfully !</b></h4></center>";
		}
		$query = mysqli_query($conn, "select * from users WHERE status='customer'") or die("Failed to connect");
		while ($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><input type="text" name="status<?php echo $data['id'];?>" value="<?php echo $data['status'];?>"></td>
				<td><input type="text" name="name<?php echo $data['id'];?>" value="<?php echo $data['name'];?>"></td>
				<td><input type="text" name="username<?php echo $data['id'];?>" value="<?php echo $data['username'];?>"></td>
				<td><input type="email" name="email<?php echo $data['id'];?>" value="<?php echo $data['email'];?>"></td>
				<td><input type="text" name="password<?php echo $data['id'];?>" value="<?php echo $data['password'];?>"></td>	
				<td><input type="text" name="mobile<?php echo $data['id'];?>" value="<?php echo $data['mobile'];?>"></td>
				<td><input type="text" name="dob<?php echo $data['id'];?>" value="<?php echo $data['dob'];?>"></td>
				<td><input type="text" name="gender<?php echo $data['id'];?>" value="<?php echo $data['gender'];?>"></td>
				<td><input type="text" name="address<?php echo $data['id'];?>" value="<?php echo $data['address'];?>"></td>
				
				<td><img src="<?php echo "uploads/".$data['image']; ?>" alt="" height="20" width="20"></td>
				<td><input type="checkbox" name="check[]" value="<?php echo $data['id'];?>"></td>
				<td><a href="update-cust-info.php?uid=<?php echo $data['id']; ?>" class="btn btn-info">Update</a></td>
				<td><a href="add-image.php?uid=<?php echo $data['id']; ?>" class="btn btn-primary" >Add Image</a></td>
				<td><a href="view-gallery.php?uid=<?php echo $data['id']; ?>" class="btn btn-success">View Gallery</a></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="14">
					<input type="submit" name="update" value="Update" class="btn btn-success">
					<a href="customer.php" class="btn btn-success" role="button">Back</a>
				</td>
			</tr>
		</table>
	</form>