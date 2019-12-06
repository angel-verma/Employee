<?php 
	require 'include/link.php'; 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Success</title>
</head>
<body style="margin-top: 50px;">
	<div class="container">
		<div class="alert alert-success" role="alert">
		<h1 class="text-center">Welcome <?php $name; ?>! You are Registered to our Database</h1>
			<h3 class="text-center">For LOGIN click the link below <strong><?php $name; ?></strong></h3><br>
			<a href="index.php" class="btn btn-success btn-lg" style="margin-left: 510px;">Login here</a>
		</div>
	</div>
</body>
</html>