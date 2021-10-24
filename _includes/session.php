<?php 

include_once 'error-reporting.php';

session_start(); 

$id_count = '';
$admin = '';
$admin_id = '';

function message() {
	if (isset($_SESSION["message"])) {
		$output  = "<div class=\"message\">";
		$output .= htmlentities($_SESSION["message"]);
		$output .= "</div>";

		// Clear message after using once
		$_SESSION["message"] = null;

		return $output;
	}
}

function contact_update_message() {
	if (isset($_SESSION["message"])) {
		$output  = "<span id=\"success-fade\" class=\"contact-update-message\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp;&nbsp;&nbsp;";
		$output .= htmlentities($_SESSION["message"]);
		$output .= "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-star\" aria-hidden=\"true\"></i></span>";

		// Clear message after using once
		$_SESSION["message"] = null;

		return $output;
	}
}


function errors() {
	if (isset($_SESSION["errors"])) {
		$errors .= $_SESSION["errors"];

		// Clear errors after using once
		$_SESSION["errors"] = null;

		return $errors;
	}
}	

?>