<?php
include 'include/header.php';
# session_start();
include 'include/db.php';

if (isset($_GET['uid'])) {
	$uid = $_GET['uid'];
}

if (isset($_POST['submit'])) {
	$file = $_FILES['file']['name'];

	foreach ($file as $fle => $value) {
		$file_name = $_FILES['file']['name'][$fle];
		$tmp_name = $_FILES['file']['tmp_name'][$fle];

		move_uploaded_file($tmp_name, "uploads/".$file_name);

		$check = mysqli_query($conn, "INSERT INTO image_table(filename, fileuid) VALUES ('$file_name', '$uid' )");
	}

	if ($check == 1) {
		echo "<script type='text/javascript'>
				alert('file uploaded successfully');
				</script> ";
	} else {
		echo "Error while uploading files !!!";
	}
}
?>

<section class="add-cust-section">
	<br>
	<h1 class="text-center text-capitalize">Add multiple images for your gallery</h1>
	<center>
		<section class="inner-section">
			<form method="POST" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td><label>Add Image</label></td>
						<td><input type="file" name="file[]" multiple="multiple"></td>
						<!-- Multiple is used for multiple file upload -->
					</tr>

					<tr>
						<td colspan="2">
							<input type="submit" name="submit" value="Add Image" class="btn btn-primary">
						</td>
					</tr>
				</table>
			</form>
		</section>
	</center>
</section>