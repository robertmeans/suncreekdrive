<?php // primary query - to fill out contact cards
	$query  = "SELECT * ";
	$query .= "FROM neighbors ";
	$query .= "ORDER BY sun_creek_street_number ASC";

	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>








