<?php include '_db/connect.php'; ?>
<?php include '_db/query.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Sun Creek HOA II</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
<!-- Email buttons at top of page -->
<?php include '_includes/mass-email-links.php' ?>
<?php 
	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {
		?>

<div class="contact">
<?php echo "<p class=\"main-address\">" . $contact_info["sun_creek_street_number"] . " Sun Creek Drive</p>"; ?>
<div class="card">
	<?php
		// ############################### Owner Information #################################
		//
		// ########################### Owner Names and Email Links ###########################
		//
		// different last names, both have email addresses
		if (($contact_info["owner1_last_name"] !== $contact_info["owner2_last_name"]) && 
			($contact_info["owner1_email"] !== "x" && $contact_info["owner2_email"] !== "x")) {
				echo "<p class=\"pad\"><a href=\"mailto:" . 
				$contact_info["owner1_email"] . "\">" . 
				$contact_info["owner1_first_name"] . " " . 
				$contact_info["owner1_last_name"] . "</a> <br />" . "<a href=\"mailto:" . 
				$contact_info["owner2_email"] . "\">" . 
				$contact_info["owner2_first_name"] . " " . 
				$contact_info["owner2_last_name"] . "</a></p>";

		// same last names, owner1 has email address, owner2 does not
		} elseif 	(($contact_info["owner1_last_name"] === $contact_info["owner2_last_name"]) && 
					(($contact_info["owner1_email"] !== "x") && ($contact_info["owner2_email"] === "x"))) {
						echo "<p class=\"pad\"><a href=\"mailto:" . 
						$contact_info["owner1_email"] . "\">" . 
						$contact_info["owner1_first_name"] . "</a> &amp; " . 
						$contact_info["owner2_first_name"] . "</a> " . 
						$contact_info["owner1_last_name"] . "</p>";	

		// same last names, owner1 does not have email address, owner2 does
		} elseif 	(($contact_info["owner1_last_name"] === $contact_info["owner2_last_name"]) && 
					(($contact_info["owner1_email"] === "x") && ($contact_info["owner2_email"] !== "x"))) {
						echo "<p class=\"pad\">" . 
						$contact_info["owner1_first_name"] . " &amp; " . "<a href=\"mailto:" . 
						$contact_info["owner2_email"] . "\">" . 
						$contact_info["owner2_first_name"] . "</a> " . 
						$contact_info["owner1_last_name"] . "</p>";

		// same last names and both have email addresses
		} elseif 	(($contact_info["owner1_last_name"] === $contact_info["owner2_last_name"]) && 
					(($contact_info["owner1_email"] !== "x") && ($contact_info["owner2_email"] !== "x"))) {
						echo "<p class=\"pad\"><a href=\"mailto:" . 
						$contact_info["owner1_email"] . "\">" . 
						$contact_info["owner1_first_name"]  ."</a> &amp; " . "<a href=\"mailto:" . 
						$contact_info["owner2_email"] . "\">" . 
						$contact_info["owner2_first_name"] . "</a> " . 
						$contact_info["owner1_last_name"] . " &nbsp;&nbsp;[ <a href=\"mailto:" . 
						$contact_info["owner1_email"] . "; " . 
						$contact_info["owner2_email"] . "\">" . "email both</a> ] </p>";

		// only 1 owner (owner1)
		} elseif 	(($contact_info["owner1_email"] !== "x") && ($contact_info["owner2_email"] === "x")) {
						echo "<p class=\"pad\"><a href=\"mailto:" . 
						$contact_info["owner1_email"] . "\">" . 
						$contact_info["owner1_first_name"]  . " " . 
						$contact_info["owner1_last_name"] . "</a></p>";

		// only 1 owner but for some reason they submitted that owner as "owner2"
		} elseif 	(($contact_info["owner1_email"] === "x") && ($contact_info["owner2_email"] !== "x")) {
						echo "<p class=\"pad\"><a href=\"mailto:" . 
						$contact_info["owner2_email"] . "\">" . 
						$contact_info["owner2_first_name"]  . " " . 
						$contact_info["owner2_last_name"] . "</a></p>";

		} else {
			echo "You're trying to break this, I can tell.<br />";
		}

		// ########################### Owner Phone Numbers ###########################
		// Owner home phone number
		if ($contact_info["owner_home_phone"] !== "x") {
				$data = $contact_info["owner_home_phone"];
				echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
				echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";	
		
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// Owner1 cell number
		if ($contact_info["owner1_cell"] !== "x") {
			$data = $contact_info["owner1_cell"];
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $contact_info["owner1_first_name"] . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// Owner 2 cell number
		if ($contact_info["owner2_cell"] !== "x") {
			$data = $contact_info["owner2_cell"];
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $contact_info["owner2_first_name"] . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br /><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// ########################### Owner alternate home address ###########################
		// Owner alternate home address
		if ($contact_info["owner_alt_street1"] !== "x") {
			echo "<p class=\"underline\">Owner Alternate Mailing Address</p>";
			echo $contact_info["owner_alt_street1"] . "<br />";
		}
		if ($contact_info["owner_alt_street2"] !== "x") {
			echo $contact_info["owner_alt_street2"] . "<br />";
		}
		if ($contact_info["owner_alt_city"] !== "x") {
			echo $contact_info["owner_alt_city"] . ", ";
		}
		if ($contact_info["owner_alt_state"] !== "x") {
			echo $contact_info["owner_alt_state"] . "&nbsp;&nbsp;";
		}
		if ($contact_info["owner_alt_zip"] !== "x") {
			echo $contact_info["owner_alt_zip"];
		}


		// If a tenant exists, draw a horizontal line
		if (($contact_info["tenant1_first_name"] !== "x") || ($contact_info["tenant2_first_name"] !== "x")) {
			echo "<hr class=\"owner-tenant-divider\" />";
			echo "<p class=\"underline\">Tenant Information</p>";
		} 



		// ########################### Tenant information ###########################
		// Names & emails
		// different last names, both have email addresses
		if 	(($contact_info["tenant1_last_name"] !== $contact_info["tenant2_last_name"]) && 
			($contact_info["tenant1_email"] !== "x" && $contact_info["tenant2_email"] !== "x")) {
				echo "<a href=\"mailto:" . 
				$contact_info["tenant1_email"] . "\">" . 
				$contact_info["tenant1_first_name"] . " " . 
				$contact_info["tenant1_last_name"] . "</a> <br />" . "<a href=\"mailto:" . 
				$contact_info["tenant2_email"] . "\">" . 
				$contact_info["tenant2_first_name"] . " " . 
				$contact_info["tenant2_last_name"] . "</a> <br />";

		// different last names, tenant1 does not have email address
		} elseif 	(($contact_info["tenant1_last_name"] === $contact_info["tenant2_last_name"]) && 
					(($contact_info["tenant1_email"] !== "x") && ($contact_info["tenant2_email"] === "x"))) {
				echo "<a href=\"mailto:" . 
				$contact_info["tenant1_email"] . "\">" . 
				$contact_info["tenant1_first_name"] . "</a> &amp; " . 
				$contact_info["tenant2_first_name"] . "</a> " . 
				$contact_info["tenant1_last_name"] . "<br />";	

		// different last names, tenant2 does not have email address
		} elseif 	(($contact_info["tenant1_last_name"] === $contact_info["tenant2_last_name"]) && 
					(($contact_info["tenant1_email"] === "x") && ($contact_info["tenant2_email"] !== "x"))) {
				echo 	$contact_info["tenant1_first_name"] . "&amp; " . "<a href=\"mailto:" . 
						$contact_info["tenant2_email"] . "\">" . 
						$contact_info["tenant2_first_name"] . "</a> " . 
						$contact_info["tenant1_last_name"] . "<br />";

		// same last names and both have email addresses
		} elseif 	(($contact_info["tenant1_last_name"] === $contact_info["tenant2_last_name"]) && 
					(($contact_info["tenant1_email"] !== "x") && ($contact_info["tenant2_email"] !== "x"))) {
				echo "<a href=\"mailto:" . 
				$contact_info["tenant1_email"] . "\">" . 
				$contact_info["tenant1_first_name"]  ."</a> &amp; " . "<a href=\"mailto:" . 
				$contact_info["tenant2_email"] . "\">" . 
				$contact_info["tenant2_first_name"] . "</a> " . 
				$contact_info["tenant1_last_name"] . " &nbsp;&nbsp;[ <a href=\"mailto:" . 
				$contact_info["tenant1_email"] . "; " . 
				$contact_info["tenant2_email"] . "\">" . "email both</a> ] " . "<br />";
 
		// only 1 tenant
		} elseif (($contact_info["tenant1_email"] !== "x") && ($contact_info["tenant2_email"] === "x")) {
				echo "<a href=\"mailto:" . 
				$contact_info["tenant1_email"] . "\">" . 
				$contact_info["tenant1_first_name"]  . " " . 
				$contact_info["tenant1_last_name"] . "</a><br />";

		// only 1 tenant but for some reason they submitted that owner as "owner 2"
		} elseif (($contact_info["tenant1_email"] === "x") && ($contact_info["tenant2_email"] !== "x")) {
				echo "<a href=\"mailto:" . 
				$contact_info["tenant2_email"] . "\">" . 
				$contact_info["tenant2_first_name"]  . " " . 
				$contact_info["tenant2_last_name"] . "</a> <br />";

		// if both tenant fields are empty
		} elseif (($contact_info["tenant1_email"] === "x") && ($contact_info["tenant2_email"] === "x")) {
				echo "<p class=\"hide\">";
		} else {
				echo "You're trying to break this, I can tell.<br />";
		}



		// ########## Tenant phone numbers ##########
		// tenant home number
		if ($contact_info["tenant_home_phone"] !== "x") {
			$data = $contact_info["tenant_home_phone"];
			echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
			echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// tenant1 cell number
		if ($contact_info["tenant1_cell"] !== "x") {
			$data = $contact_info["tenant1_cell"];
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
			$contact_info["tenant1_first_name"] . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";

		}

		// tenant2 cell number
		if ($contact_info["tenant2_cell"] !== "x") {
			$data = $contact_info["tenant2_cell"];
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
			$contact_info["tenant2_first_name"] . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br /><br />";
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";

		}

		 ?>

</div><!-- .card -->
</div><!-- .contact -->
	<?php
	// end query while loop
		}
 	?>
</div><!-- #wrapper -->

<?php include '_includes/footer.php'; ?>
<?php mysqli_free_result($result); ?>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>

<?php mysqli_close($connection); ?>