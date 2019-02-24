<?php
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "complete-blog-php");
//$conn['base_url'] = 'http://localhost:8000/blog/index.php';
	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:blog/');
?>
