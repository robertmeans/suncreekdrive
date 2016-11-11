<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>

<?php 

// ----------------------------------------------------------------------------- Don't know if any of this is correct...
if (isset($_POST['submit'])) {
	$owner1_first_name = $_POST['owner1_first_name'];

	// validations
	// $required_fields = array("field_name1", "field_name2", "field_name3", "etc");
	// validate_presences($required_fields);

	$fields_with_max_lengths = array("owner1_first_name" => 30);
	validate_max_lengths($fields_with_max_lengths);

	if (!empty($errors)) {
		$_SESSION["errors"] = $errors;
		redirect_to("manage-contacts.php");
	} 

	$escaped_string = mysqli_real_escape_string[$connection, $string];
	return $escaped_string;

	$query  = "INSERT INTO neighbors (";
	$query .= " owner1_first_name, owner2_first_name ";
	$query .= ") VALUES ( ";
	$query .= "'{$owner1_first_name}', '{$owner2_first_name}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);
	if ($result) {
		// Success
		redirect_to("manage-contacts.php");
	}

} else {
	// This is probably a GET request
	redirect_to("index.php");
}

 ?>








<?php if (isset($connection)) { mysqli_close($connection); } ?>