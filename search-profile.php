<html>
<head>
	<title>Search User</title>
</head>

<?php 
include 'include/header.php';
session_start();

include 'include/db.php';

#check for a form submission
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	//$password = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' ");

	$count = mysqli_num_rows($query);	//return number of rows in that particular query

	if ($count > 0) {
		$_SESSION['cnm'] = $username; 	# only one line of session

		$data = mysqli_fetch_array($query);
		$status = $data['status'];

		if ($status == 'admin') {
			header("location:my-profile.php");
		}
		elseif ($status == 'employee') {
			header("location:my-profile.php");
		}
		elseif ($status == 'customer') {
			header("location:my-profile.php");
		}
		else {
			echo "Status couldn't match";
		}
	}
	else {
		header("location:error.php");
	}
}

?>

<body>
	<div class="block-vcp">
		<div class="inner">
			<h1 class="text-center text-uppercase">search user</h1><hr><br><br>

			<form  method="POST">
				<input type="text" placeholder="Username*" required name="username" class="form-control text-center input-lg" /><br><br>
				<!-- <input type="password" placeholder="Password*" required name="password" class="form-control text-center input-lg"><br><br> -->

				<button type="submit" name="submit" class="btn btn-success btn-lg btn-width">VIEW PROFILE</button>
			</form>
		</div>
	</div>
</body>
</html>