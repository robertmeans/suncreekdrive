<?php 
// 1. Create db connection
$dbhost	= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "suncreekdrive";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection occured
if(mysqli_connect_errno()) {
	die("Datebase connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" ); }
 ?>
 <?php 

 	$id = 6;
 	$tenant1_first_name = "Robert";

 // 2. Perform db query
 	$query = "UPDATE neighbors SET ";
 	$query .= "tenant1_first_name = '{$tenant1_first_name}'";
 	$query .= "WHERE id = {$id} ";
 	
 	$result = mysqli_query($connection, $query);

 	// Test if there was a query error
 	if ($result && mysqli_affected_rows($connection) == 1) {
 		// Success
 		// redirect_to("sandbox1-use-returned-data.php");
 		echo "Update was completed successfully!";
 	} else {
 		// Failure
 		// $message = "Subject update failed";
 		// below message not something you want visitor to see but can be useful for development
 		die("Database query failed (maybe you didn't change the variable?: " . mysqli_error($connection));

 		// die("Database query failed. " . mysqli_error($connection));
 	}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sandbox 1</title>
</head>
<body>




<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>

<?php mysqli_close($connection); ?>