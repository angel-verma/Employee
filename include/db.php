<?php
# Database connection settings
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'first_db';

$conn = mysqli_connect($host, $user, $pass, $db) or die("Failed to connect to database".mysql_error());