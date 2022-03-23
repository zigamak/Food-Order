<?php
//Create Constants to avoid repeating
session_start();
define('SITEURL','http://localhost/Food-Order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','ZigaMaks1234####');
define('DB_NAME', 'food-order');

$conn=mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD);// Database connection
$db_select=mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); // Selecting Database


?>