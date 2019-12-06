<?php 
include 'include/link.php'; 
session_start();
?>

<h2 class="text-center"><u><b>Full Details of all Customers and Employee</b></u></h2><br>
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
	# pagination concept
	$id = 1;
	$start = 0;
	$limit = 5;

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$start = ($id-1) * $limit;
	}

	//$query = mysqli_query($conn, "select * from users");
	$query = mysqli_query($conn, "SELECT * FROM users LIMIT $start, $limit");
	

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
			<a href="welcome-admin.php" class="btn btn-success btn-lg" role="button">Back</a>
		</td>
	</tr>
</table>

<?php
$rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
$total = ceil($rows/$limit);
?>
<center>
	<nav>
		<ul class="pagination pagination-lg">
			<?php
				if ($id > 1) {
					echo "<li>
							<a href='?id=".($id-1)."' class='btn btn-primary'>
								<span>&laquo;</span> Previous	
							</a>
						</li>";
				}
				for ($i=1; $i <= $total ; $i++) { 
					echo "<li><a href='?id=".($i)."'> $i </a></li>";
				}
				if ($id != $total) {
					echo "<li>
							<a href='?id=".($id+1)."' class='btn btn-primary'>
								Next <span>&raquo;</span>
							</a>
						</li>";
				}
			?>
		</ul>
	</nav>
</center>