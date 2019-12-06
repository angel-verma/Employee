<?php
include 'include/link.php';
?>

<h2 class="text-center text-uppercase"><b>image gallery</b></h2><br>
<div class="container">

<?php
include 'include/db.php';

if (isset($_GET['uid'])) {
	$uid = $_GET['uid'];
}

$query = mysqli_query($conn, "SELECT * FROM image_table WHERE fileuid='$uid' ");
while($data = mysqli_fetch_array($query)){
?>

<img src="<?php echo "uploads/".$data['filename']; ?>" alt="" height="200" width="200" class="img-circle" />
<?php } ?>
<br><br><br>

	<a href="welcome-admin.php" class="btn btn-primary pull-left">Back</a>

</div>

