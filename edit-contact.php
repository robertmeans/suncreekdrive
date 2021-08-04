<?php require_once '_includes/session.php'; ?>
<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php include '_includes/validation-functions.php'; ?>

<?php // $_GET["unit"]

	if (isset($_GET["unit"])) {
		$current_contact_to_edit = $_GET["unit"];
	} else {
		$current_contact_to_edit = null;
		echo "denied!";
	}
 ?>

<?php 

if (isset($_POST['submit'])) {

	// $fields_with_max_lengths = array("owner1_first_name" => 25, "owner1_last_name" => 25, "owner1_email" => 40, "owner2_first_name" => 25, "owner2_last_name" => 25, "owner2_email" => 40, "owner_alt_street1" => 25, "owner_alt_street2" => 25, "owner_alt_city" => 25, "owner_alt_state" => 2, "owner_alt_zip" => 10, "tenant1_first_name" => 25, "tenant1_last_name" => 25, "tenant1_email" => 40, "tenant2_first_name" => 25, "tenant2_last_name" => 25, "tenant2_email" => 40, "notes" => 255);

	// $phones_to_clean = array("owner1_cell" => 10, "owner2_cell" => 10, "owner_home_phone" => 10, "tenant1_cell" => 10, "tenant2_cell" => 10, "tenant_home_phone" => 10,);

	// validate_max_lengths($fields_with_max_lengths);
	// clean_phones($phones_to_clean);

	$fields_with_max_lengths = array(	"owner1_first_name" 	=> 25, 
										"owner1_last_name" 		=> 25, 
										"owner1_cell" 			=> 10, 
										"owner1_email" 			=> 40, 
										"owner2_first_name" 	=> 25, 
										"owner2_last_name" 		=> 25, 
										"owner2_cell" 			=> 10, 
										"owner2_email" 			=> 40, 
										"owner_home_phone" 		=> 10, 
										"owner_alt_street1" 	=> 25, 
										"owner_alt_street2" 	=> 25, 
										"owner_alt_city" 		=> 25, 
										"owner_alt_state" 		=> 2, 
										"owner_alt_zip" 		=> 10, 
										"tenant1_first_name" 	=> 25, 
										"tenant1_last_name" 	=> 25, 
										"tenant1_cell" 			=> 10, 
										"tenant1_email" 		=> 40, 
										"tenant2_first_name" 	=> 25, 
										"tenant2_last_name" 	=> 25, 
										"tenant2_cell" 			=> 10, 
										"tenant2_email" 		=> 40, 
										"tenant_home_phone" 	=> 10, 
										"notes" 				=> 255
										);

	validate_max_lengths($fields_with_max_lengths);

	if (empty($errors)) {
		// Perform Update 

		$street_address = $current_contact_to_edit;
		$owner1_first_name = mysql_prep($_POST['owner1_first_name']);
		$owner1_last_name = mysql_prep($_POST['owner1_last_name']);

		$owner1_cell = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['owner1_cell']));
		$owner1_email = mysql_prep($_POST['owner1_email']);

		$owner2_first_name = mysql_prep($_POST['owner2_first_name']);
		$owner2_last_name = mysql_prep($_POST['owner2_last_name']);
		$owner2_cell = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['owner2_cell']));
		$owner2_email = mysql_prep($_POST['owner2_email']);

		$owner_home_phone = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['owner_home_phone']));

		$owner_alt_street1 = mysql_prep($_POST['owner_alt_street1']);
		$owner_alt_street2 = mysql_prep($_POST['owner_alt_street2']);
		$owner_alt_city = mysql_prep($_POST['owner_alt_city']);
		$owner_alt_state = mysql_prep($_POST['owner_alt_state']);
		$owner_alt_zip = mysql_prep($_POST['owner_alt_zip']);

		$tenant1_first_name = mysql_prep($_POST['tenant1_first_name']);
		$tenant1_last_name = mysql_prep($_POST['tenant1_last_name']);
		$tenant1_cell = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['tenant1_cell']));
		$tenant1_email = mysql_prep($_POST['tenant1_email']);

		$tenant2_first_name = mysql_prep($_POST['tenant2_first_name']);
		$tenant2_last_name = mysql_prep($_POST['tenant2_last_name']);
		$tenant2_cell = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['tenant2_cell']));
		$tenant2_email = mysql_prep($_POST['tenant2_email']);

		$tenant_home_phone = mysql_prep(preg_replace('/[^0-9]/', '', $_POST['tenant_home_phone']));

		$notes = mysql_prep($_POST['notes']);

		// $escaped_string = mysqli_real_escape_string($connection, $string);
		// return $escaped_string;

		$query  = "UPDATE neighbors SET ";
		$query .= "owner1_first_name = '{$owner1_first_name}', ";
		$query .= "owner1_last_name = '{$owner1_last_name}', ";
		$query .= "owner1_cell = '{$owner1_cell}', ";
		$query .= "owner1_email = '{$owner1_email}', ";

		$query .= "owner2_first_name = '{$owner2_first_name}', ";
		$query .= "owner2_last_name = '{$owner2_last_name}', ";
		$query .= "owner2_cell = '{$owner2_cell}', ";
		$query .= "owner2_email = '{$owner2_email}', ";

		$query .= "owner_home_phone = '{$owner_home_phone}', ";

		$query .= "owner_alt_street1 = '{$owner_alt_street1}', ";
		$query .= "owner_alt_street2 = '{$owner_alt_street2}', ";
		$query .= "owner_alt_city = '{$owner_alt_city}', ";
		$query .= "owner_alt_state = '{$owner_alt_state}', ";
		$query .= "owner_alt_zip = '{$owner_alt_zip}', ";

		$query .= "tenant1_first_name = '{$tenant1_first_name}', ";
		$query .= "tenant1_last_name = '{$tenant1_last_name}', ";
		$query .= "tenant1_cell = '{$tenant1_cell}', ";
		$query .= "tenant1_email = '{$tenant1_email}', ";

		$query .= "tenant2_first_name = '{$tenant2_first_name}', ";
		$query .= "tenant2_last_name = '{$tenant2_last_name}', ";
		$query .= "tenant2_cell = '{$tenant2_cell}', ";
		$query .= "tenant2_email = '{$tenant2_email}', ";

		$query .= "tenant_home_phone = '{$tenant_home_phone}', ";

		$query .= "notes = '{$notes}' ";

		$query .= "WHERE sun_creek_street_number = '{$street_address}' ";
		$query .= "LIMIT 1";

		$result = mysqli_query($connection, $query);
			// redirect_to("manage-contacts.php");

		// ^^ Above used to read like below but had to get rid of the if statement b/c it
		// would not allow for no changes to be submitted to DB.
		// 
		if ($result && mysqli_affected_rows($connection) >= 0) {
			// Success
			$_SESSION["message"] = "Update Successful!";
			redirect_to("manage-contacts.php");
		} else {
			// Update Failed
			$message = "Update did not process. Likely Internet hiccup. Try again.";	
		}	
	}

} else {
	// This is probably a GET request
} // end: if (isset($_POST['submit']))

 ?>
<?php $layout_context = "edit-contacts"; ?>
<?php $admin_set = find_all_admins(); ?>
<?php $admin = mysqli_fetch_assoc($admin_set) ?>
<?php include '_includes/header.php'; ?>


<div id="flex-wrapper-update">
<div class="contact-update">
<div class="address-header">
	<?php echo 	"<p class=\"main-address\">Edit > " . htmlentities($current_contact_to_edit) . " Sun Creek Drive</p>"; ?>
</div><!-- .address-header -->
<div class="card-update">
    <?php echo message(); ?>  
    <?php echo form_errors($errors); ?>
    
	<?php 
		if (!empty($message)) {
			echo "<div class=\"message\">" . htmlentities($message) . "</div>";
		}
	 ?>
	 
<?php  	
// This has to stay here b/c it echos an error 
// onto the card if bogus address is entered into url
$this_info = find_contact_by_address($current_contact_to_edit);
include '_includes/edit-contact-variables.php';
?>
<form id="contact-update-form" name="edit_form" action="edit-contact.php?unit=<?php echo urlencode($current_contact_to_edit) ?>" method="post">

<div class="contact-edit-section">
	<div class="ef"><div class="el">Owner 1 First Name:</div><div class="ei"><input <?php if (array_key_exists('owner1_first_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner1_first_name" value="<?php

		echo (isset($_POST['owner1_first_name'])) ? $_POST['owner1_first_name'] : $o1fn;

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 1 Last Name:</div><div class="ei"><input <?php if (array_key_exists('owner1_last_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner1_last_name" value="<?php 

		echo (isset($_POST['owner1_last_name'])) ? $_POST['owner1_last_name'] : $o1ln;

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 1 Cell:</div><div class="ei"><input <?php if (array_key_exists('owner1_cell', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="owner1_cell" value="<?php 

		echo (isset($_POST['owner1_cell'])) ? $_POST['owner1_cell'] : $o1c;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 1 Email:</div><div class="ei"><input <?php if (array_key_exists('owner1_email', $errors)) { echo "class=\"form-alert\""; } ?> type="email" name="owner1_email" value="<?php 

		echo (isset($_POST['owner1_email'])) ? $_POST['owner1_email'] : $o1em;  

	?>" /></div></div>
	<hr class="hr-edit1" />
	<div class="ef"><div class="el">Owner 2 First Name:</div><div class="ei"><input <?php if (array_key_exists('owner2_first_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner2_first_name" value="<?php 

		echo (isset($_POST['owner2_first_name'])) ? $_POST['owner2_first_name'] : $o2fn;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 2 Last Name:</div><div class="ei"><input <?php if (array_key_exists('owner2_last_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner2_last_name" value="<?php 

		echo (isset($_POST['owner2_last_name'])) ? $_POST['owner2_last_name'] : $o2ln;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 2 Cell:</div><div class="ei"><input <?php if (array_key_exists('owner2_cell', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="owner2_cell" value="<?php 

		// echo (isset($_POST['owner2_cell'])) ? preg_replace('/\D/', '', $_POST['owner2_cell']) : preg_replace('/\D/', '', $o2c);
		// ^^ testing
		echo (isset($_POST['owner2_cell'])) ? $_POST['owner2_cell'] : $o2c;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner 2 Email:</div><div class="ei"><input <?php if (array_key_exists('owner2_email', $errors)) { echo "class=\"form-alert\""; } ?> type="email" name="owner2_email" value="<?php 

		echo (isset($_POST['owner2_email'])) ? $_POST['owner2_email'] : $o2em;  

	?>" /></div></div>
	<hr class="hr-edit1" />
	<div class="ef"><div class="el">Owner Home Phone:</div><div class="ei"><input <?php if (array_key_exists('owner_home_phone', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="owner_home_phone" value="<?php 

		echo (isset($_POST['owner_home_phone'])) ? $_POST['owner_home_phone'] : $ohp;  

	?>" /></div></div>
	<br />
	<div class="ef"><div class="el">Owner Alt Street 1:</div><div class="ei"><input <?php if (array_key_exists('owner_alt_street1', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner_alt_street1" value="<?php 

		echo (isset($_POST['owner_alt_street1'])) ? $_POST['owner_alt_street1'] : $oas1;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner Alt Street 2:</div><div class="ei"><input <?php if (array_key_exists('owner_alt_street2', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner_alt_street2" value="<?php 

		echo (isset($_POST['owner_alt_street2'])) ? $_POST['owner_alt_street2'] : $oas2;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner Alt City:</div><div class="ei"><input <?php if (array_key_exists('owner_alt_city', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner_alt_city" value="<?php 

		echo (isset($_POST['owner_alt_city'])) ? $_POST['owner_alt_city'] : $oac;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner Alt State:</div><div class="ei"><input <?php if (array_key_exists('owner_alt_state', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="owner_alt_state" value="<?php 

		echo (isset($_POST['owner_alt_state'])) ? $_POST['owner_alt_state'] : $oas;  

	?>" /></div></div>
	<div class="ef"><div class="el">Owner Alt Zip:</div><div class="ei"><input <?php if (array_key_exists('owner_alt_zip', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="owner_alt_zip" value="<?php 

		echo (isset($_POST['owner_alt_zip'])) ? $_POST['owner_alt_zip'] : $oaz;  

	?>" /></div></div>
</div>

<div class="contact-edit-section">
	<div class="ef"><div class="el">Tenant 1 First Name:</div><div class="ei"><input <?php if (array_key_exists('tenant1_first_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="tenant1_first_name" value="<?php 

		echo (isset($_POST['tenant1_first_name'])) ? $_POST['tenant1_first_name'] : $t1fn; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 1 Last Name:</div><div class="ei"><input <?php if (array_key_exists('tenant1_last_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="tenant1_last_name" value="<?php 

		echo (isset($_POST['tenant1_last_name'])) ? $_POST['tenant1_last_name'] : $t1ln; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 1 Cell:</div><div class="ei"><input <?php if (array_key_exists('tenant1_cell', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="tenant1_cell" value="<?php 

		echo (isset($_POST['tenant1_cell'])) ? $_POST['tenant1_cell'] : $t1c; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 1 Email:</div><div class="ei"><input <?php if (array_key_exists('tenant1_email', $errors)) { echo "class=\"form-alert\""; } ?> type="email" name="tenant1_email" value="<?php 

		echo (isset($_POST['tenant1_email'])) ? $_POST['tenant1_email'] : $t1em;

	?>" /></div></div>
	<hr class="hr-edit2" />
	<div class="ef"><div class="el">Tenant 2 First Name:</div><div class="ei"><input <?php if (array_key_exists('tenant2_first_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="tenant2_first_name" value="<?php 

		echo (isset($_POST['tenant2_first_name'])) ? $_POST['tenant2_first_name'] : $t2fn; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 2 Last Name:</div><div class="ei"><input <?php if (array_key_exists('tenant2_last_name', $errors)) { echo "class=\"form-alert\""; } ?> type="text" name="tenant2_last_name" value="<?php 

		echo (isset($_POST['tenant2_last_name'])) ? $_POST['tenant2_last_name'] : $t2ln; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 2 Cell:</div><div class="ei"><input <?php if (array_key_exists('tenant2_cell', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="tenant2_cell" value="<?php 

		echo (isset($_POST['tenant2_cell'])) ? $_POST['tenant2_cell'] : $t2c; 

	?>" /></div></div>
	<div class="ef"><div class="el">Tenant 2 Email:</div><div class="ei"><input <?php if (array_key_exists('tenant2_email', $errors)) { echo "class=\"form-alert\""; } ?> type="email" name="tenant2_email" value="<?php 

		echo (isset($_POST['tenant2_email'])) ? $_POST['tenant2_email'] : $t2em; 

	?>" /></div></div>
	<br />
	<div class="ef"><div class="el">Tenant Home Phone:</div><div class="ei"><input <?php if (array_key_exists('tenant_home_phone', $errors)) { echo "class=\"form-alert\""; } ?> type="tel" name="tenant_home_phone" value="<?php 

		echo (isset($_POST['tenant_home_phone'])) ? $_POST['tenant_home_phone'] : $thp; 

	?>" /></div></div>
</div>
<div class="note-area"><span class="note-label">Notes:</span><textarea <?php if (array_key_exists('notes', $errors)) { echo "class=\"form-alert\""; } ?> name="notes"><?php 

	echo (isset($_POST['notes'])) ? $_POST['notes'] : $notes; 

?></textarea></div>

<br />

<div class="button-footer">
	<div class="buttons">
		<a class="cancel-button" href="manage-contacts.php">Cancel</a> <input type="submit" id="edit-submit" name="submit" value="Update" /><br />
	</div>
</div>
</form>

</div><!-- .card -->
</div><!-- .contact -->

</div><!-- #wrapper -->


<?php include '_includes/footer.php'; ?>