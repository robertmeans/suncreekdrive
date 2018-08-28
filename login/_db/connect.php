<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "suncreekadmin");
	define("DB_PASS", "I-was-30623-in-2016");
	define("DB_NAME", "suncreekdrive");

// Local Testing
	// define("DB_SERVER", "localhost");
	// define("DB_USER", "root");
	// define("DB_PASS", "");
	// define("DB_NAME", "suncreekdrive");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection occured
if(mysqli_connect_errno()) {
	die("Datebase connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" ); }
 ?>
 
