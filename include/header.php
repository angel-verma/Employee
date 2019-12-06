<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Start Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="welcome-admin.php"><i>Real Estate</i></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="toggle-nav">
			
				<ul class="nav navbar-nav navbar-right">

					<li><a href="index.php">HOME</a></li>
					<li><a href="customer.php">CUSTOMER</a></li>
					<li><a href="employee.php">EMPLOYEE</a></li>
					<li><a href="complete-details.php">COMPLETE DETAILS</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE LINKS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="welcome-admin.php">My Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="logout.php">LOGOUT</a></li>
						</ul>
					</li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!-- End Navigation -->	

	<!-- Start footer -->
	<?php require 'include/footer.php'; ?>
	<!-- End footer -->
