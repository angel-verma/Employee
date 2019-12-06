<?php 
include 'include/header.php'; 
session_start();
?>

<section class="block">
	<br>
	<h1 class="text-center text-uppercase"><b>Customer</b></h1><br>
	<center>
		<a href="add-customer.php" class="btn btn-success btn-lg" role="button">Add Customer</a><br><br>
		<a href="remove-customer.php" class="btn btn-primary btn-lg" role="button">Remove</a><br><br>
		<a href="update-customer.php" class="btn btn-primary btn-lg" role="button">Update</a><br><br>
		<a href="view-customer.php" class="btn btn-primary btn-lg" role="button">View Info</a><br><br>
		<a href="search-profile.php" class="btn btn-primary btn-lg" role="button">Search Profile</a><br><br>

		<a href="welcome-admin.php" class="btn btn-info" role="button">Back to Admin Page</a>
	</center>
</section>