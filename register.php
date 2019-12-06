<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'second_db') or die("Can't connected to database."); 

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$fname = $_FILES['image-file']['name'];
	$tname = $_FILES['image-file']['tmp_name'];
	move_uploaded_file($tname, "uploads/".$fname);

	$query = mysqli_query($conn, "insert into users(name, username, email, password, image, date) value ('$name', '$username', '$email', '$password', '$fname', NOW())");

	if ($query == 1) {
		//echo 'You are registered !';
		header("location:registration-success.php");
	} else  {
		//echo "ERROR";
		header("location:error.php");
	}
}
?>