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
 // 2. Perform db query
 	$query = "SELECT * FROM neighbors";

 	$result = mysqli_query($connection, $query);

 	// Test if there was a query error
 	if ($result) {
 		// Success
 		// redirect_to("somepage.php");
 		echo "Success!";
 	} else {
 		// Failure
 		// $message = "Subject creation failed";
 		// below message not something you want visitor to see but can be useful for development
 		// die("Database query failed: " . mysqli_error($connection));

 		die("Database query failed (see coded development notes for debugging)");
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