<?php
	// ############################### Email Links at Top #################################
	//
	// ############################################# Email Just the Owners
 	echo "<a class=\"email-links\" href=\"mailto:";
	while 	($contact_info = mysqli_fetch_assoc($result)) {
		if 	($contact_info["owner1_email"] !== "x") {
				echo $contact_info["owner1_email"] . "; ";
		}
		if 	($contact_info["owner2_email"] !== "x") {
				echo $contact_info["owner2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Owners\">Email Just the Owners</a>";

	// ############################################# Email Just the Tenants
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {
		if ($contact_info["tenant1_email"] !== "x") {
			echo $contact_info["tenant1_email"] . "; ";
		}
		if ($contact_info["tenant2_email"] !== "x") {
			echo $contact_info["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Tenants\">Email Just the Tenants</a>";

	// ############################################# Email All Current Residents
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {
		if (($contact_info["owner1_email"] !== "x") && ($contact_info["tenant1_email"] === "x"))  {
			echo $contact_info["owner1_email"] . "; ";
		}
		if (($contact_info["owner2_email"] !== "x") && ($contact_info["tenant1_email"] === "x")) {
			echo $contact_info["owner2_email"] . "; ";
		}
		if ($contact_info["tenant1_email"] !== "x") {
			echo $contact_info["tenant1_email"] . "; ";
		}
		if ($contact_info["tenant2_email"] !== "x") {
			echo $contact_info["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - Current Residents\">Email Current Residents</a>";

	// ############################################# Email Everyone
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {
		if ($contact_info["owner1_email"] !== "x") {
			echo $contact_info["owner1_email"] . "; ";
		}
		if ($contact_info["owner2_email"] !== "x") {
			echo $contact_info["owner2_email"] . "; ";
		}
		if ($contact_info["tenant1_email"] !== "x") {
			echo $contact_info["tenant1_email"] . "; ";
		}
		if ($contact_info["tenant2_email"] !== "x") {
			echo $contact_info["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - To Everyone\">Email Everyone</a>";

?>