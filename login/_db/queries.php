<?php 
	$query  = "SELECT * ";
	$query .= "FROM neighbors ";
	$query .= "ORDER BY sun_creek_street_number ASC";

	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
}

 ?>


<?php
	$email_addresses = "SELECT * ";
	$email_addresses .= "FROM neighbors ";

	$just_owners = mysqli_query($connection, $email_addresses);
	if (!$just_owners) {
		die("Email query failed.");
	}


?>

<?php
	$email_addresses = "SELECT * ";
	$email_addresses .= "FROM neighbors ";

	$just_tenants = mysqli_query($connection, $email_addresses);
	if (!$just_tenants) {
		die("Email query failed.");
	}
?>





<?php
	$email_addresses = "SELECT * ";
	$email_addresses .= "FROM neighbors ";

	$current_residents = mysqli_query($connection, $email_addresses);
	if (!$current_residents) {
		die("Email query failed.");
	}
?>









<?php
	$email_addresses = "SELECT * ";
	$email_addresses .= "FROM neighbors ";

	$everyone = mysqli_query($connection, $email_addresses);
	if (!$everyone) {
		die("Email query failed.");
	}
?>








