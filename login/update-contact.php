<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>

<?php 

// ----------------------------------------------------------------------------- Don't know if any of this is correct...
if (isset($_POST['submit'])) {
	$owner1_first_name = $_POST['owner1_first_name'];

	$escaped_string = mysqli_real_escape_string[$connection, $string];
	return $escaped_string;

	$query  = "UPDATE neighbors ( ";
	$query .= " owner1_first_name ";
	$query .= ") SET ( ";
	$query .= "'{$owner1_first_name}'";
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