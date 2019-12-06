<?php
// get values from passes from index.php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['remember'])) {
	setcookie("username", $username, time()+3600);
	setcookie("password", $password, time()+3000);
}

// to prevent mysql injection
/*$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/

session_start();
// connect to the server and select database
$conn = mysqli_connect('localhost', 'root', '', 'first_db');

// Query the database for user
$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'") or die("Failed to connect to database".mysql_error());

$count = mysqli_num_rows($query);	# return number of rows in that particular query

if ($count > 0) {
	$_SESSION['cnm'] = $username;

	$data = mysqli_fetch_array($query);

	if ($data['username'] == $username && $data['password'] == $password) {
	//echo "Login Success!!!".$row['username'];
		header("location:welcome-admin.php");
	}
} else {
		header("location:error.php");
}
?>
