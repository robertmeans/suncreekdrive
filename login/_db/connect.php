<?php 
// Remote Credentials
// $dbhost	= "localhost";
// $dbuser = "robertmeans";
// $dbpass = "I-was-30623-in-2016";
// $dbname = "suncreekdrive";

// Local Testing
$dbhost	= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "suncreekdrive";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection occured
if(mysqli_connect_errno()) {
	die("Datebase connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" ); }

 ?>
 
