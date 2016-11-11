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
 	$query = "SELECT * ";
 	$query .= "FROM neighbors ";
 	$query .= "WHERE (owner1_email != 'x' || owner2_email !='x') ";
 	$query .= "ORDER BY sun_creek_street_number ASC";

 	$result = mysqli_query($connection, $query);

 	// Test if there was a query error
 	if (!$result) {
 		die("Database query failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );

 	}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sandbox 1</title>
</head>
<body>

<?php 
	while($neighbors = mysqli_fetch_assoc($result)) {
		?>
		<li><?php echo $neighbors["tenant1_first_name"] . " (" . $neighbors["id"] . ")"; ?></li>
	<?php
	}

 ?>
<?php 
// 4. Release returned data
	mysqli_free_result($result);

 ?>


<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>

<?php mysqli_close($connection); ?>