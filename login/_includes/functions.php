<?php 

	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	function confirm_query($result) {
		if (!$result) {
			die("Database query failed.");
		}
	}

	function return_all_content() {
		global $connection;

		$query  = "SELECT * ";
		$query .= "FROM neighbors ";
		$query .= "ORDER BY sun_creek_street_number ASC";

		$result = mysqli_query($connection, $query);
		confirm_query($result);
		return $result;
	}

	function find_contact_by_address($contact_address) {
		global $connection;
		$safe_address = mysqli_real_escape_string($connection, $contact_address);

		$query  = "SELECT * ";
		$query .= "FROM neighbors ";
		$query .= "WHERE sun_creek_street_number = {$safe_address} ";
		$query .= "LIMIT 1";

		$result = mysqli_query($connection, $query);
		confirm_query($result);

		if ($contact = mysqli_fetch_assoc($result)) {
			return $contact;
		} else {
			// return null;
			echo "<span class=\"warning\">^^ That address is not us.</span>";
		}

	}	

 ?>