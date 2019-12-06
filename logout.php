<?php
session_start();
session_destroy();
header("location:index.php");

/*
if(!isset($_SESSION['cnm'])) {
	header("location:index.php");
} else {
	$_SESSION['cnm'];
}
*/
?>