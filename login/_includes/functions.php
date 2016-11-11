<?php 

	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}

	function confirm_query($result) {
		if (!$result) {
			// die("Database query failed.");
			die("Nope. Try again.");
		}
	}


	function form_errors($errors=array()) {
	$output = "";
	if (!empty($errors)) {
	  $output .= "<div class=\"error\">";
	  $output .= "Please fix the following errors:";
	  $output .= "<ul>";
	  foreach ($errors as $key => $error) {
	    $output .= "<li>{$error}</li>";
	  }
	  $output .= "</ul>";
	  $output .= "</div>";
	}
	return $output;
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