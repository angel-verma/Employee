<?php 
require 'include/link.php';
/* Main page with two forms: sign up and log in */

// Remember me coding
$cname = "";
$cpass = "";

if (isset($_COOKIE['username'])) {
	$cname = $_COOKIE['username'];
	//$cpass = $_COOKIE['password'];
}

if (isset($_POST['login'])) { //user logging in
	require 'login.php';
}
elseif (isset($_POST['register'])) { //user registering
	require 'register.php';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
</head>

<!-- Start Form -->
<div class="block">
	<div class="inner">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation">
				<a href="#sign-up" aria-controls="home" role="tab" data-toggle="tab" class="btn btn-info btn-lg tab-width">Sign Up</a>
			</li>

			<li role="presentation" class="active">
				<a href="#log-in" aria-controls="profile" role="tab" data-toggle="tab" class="btn btn-success btn-lg active tab-width">Log In</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade" id="sign-up">
				<br>
				<h1 class="text-center">Sign Up for Free</h1><br>

				<form method="POST" enctype="multipart/form-data">
					<input type="text" placeholder="Name*" required class=" form-control input-lg text-input" name="name" />

					<input type="text" placeholder="Username*" required class="form-control pull input-lg text-input" name="username" /><br>

					<input type="email" placeholder="Email Address*" required class="form-control input-lg" name="email"><br>

					<input type="password" placeholder="Set A Password*" required class="form-control input-lg" name="password"><br>

					<label class="control-label" style="color: #fff;">Upload Image <span class="text-danger"><b>*</b></span></label>
					<input type="file" name="image-file" required class="pull-right" style="color: #fff;"><br><br>

					<button type="submit" name="register" class="btn btn-success btn-lg btn-width">REGISTER</button>
				</form>
			</div>

			<div role="tabpanel" class="tab-pane active" id="log-in">
				<br>
				<h1 class="text-center">ADMIN PANEL</h1><br>

				<form method="POST">
					<input type="text" placeholder="USERNAME*" required name="username" value="<?php echo $cname; ?>" class="form-control text-center input-lg" /><br><br>

					<input type="password" placeholder="PASSWORD*" required name="password" value="<?php echo $cpass; ?>" class="form-control text-center input-lg" /><br>
					
					<label class="pull-right"><a href="#" class="text-muted">Forgot Password</a></label><br><br>

					<input type="checkbox" name="remember"><span class="text-muted" style="margin-left: 10px;">Remember Me</span><br><br>

					<button type="submit" name="login" class="btn btn-success btn-lg btn-width">LOGIN</button>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Form -->

<?php include 'include/footer.php'; ?>
