<?php
// Email Just the Owners
 	echo "<a class=\"email-links\" href=\"mailto:";
	while($owner_emails = mysqli_fetch_assoc($just_owners)) {
		if ($owner_emails["owner1_email"] !== "x") {
			echo $owner_emails["owner1_email"] . "; ";
		}
		if ($owner_emails["owner2_email"] !== "x") {
			echo $owner_emails["owner2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Owners\">Email Just the Owners</a>";
 ?>

 <?php
// Email Just the Tenants
 	echo "<a class=\"email-links\" href=\"mailto:";
	while($tenant_emails = mysqli_fetch_assoc($just_tenants)) {
		if ($tenant_emails["tenant1_email"] !== "x") {
			echo $tenant_emails["tenant1_email"] . "; ";
		}
		if ($tenant_emails["tenant2_email"] !== "x") {
			echo $tenant_emails["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Tenants\">Email Just the Tenants</a>";
 ?>

 <?php
// Email Current Residents
 	echo "<a class=\"email-links\" href=\"mailto:";
	while($current_residents_emails = mysqli_fetch_assoc($current_residents)) {
		if (($current_residents_emails["owner1_email"] !== "x") && ($current_residents_emails["tenant1_email"] === "x"))  {
			echo $current_residents_emails["owner1_email"] . "; ";
		}
		if (($current_residents_emails["owner2_email"] !== "x") && ($current_residents_emails["tenant1_email"] === "x")) {
			echo $current_residents_emails["owner2_email"] . "; ";
		}
		if ($current_residents_emails["tenant1_email"] !== "x") {
			echo $current_residents_emails["tenant1_email"] . "; ";
		}
		if ($current_residents_emails["tenant2_email"] !== "x") {
			echo $current_residents_emails["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - Current Residents\">Email Current Residents</a>";
 ?>

 <?php
// Email Everyone
 	echo "<a class=\"email-links\" href=\"mailto:";
	while($everyone_emails = mysqli_fetch_assoc($everyone)) {
		if ($everyone_emails["owner1_email"] !== "x") {
			echo $everyone_emails["owner1_email"] . "; ";
		}
		if ($everyone_emails["owner2_email"] !== "x") {
			echo $everyone_emails["owner2_email"] . "; ";
		}
		if ($everyone_emails["tenant1_email"] !== "x") {
			echo $everyone_emails["tenant1_email"] . "; ";
		}
		if ($everyone_emails["tenant2_email"] !== "x") {
			echo $everyone_emails["tenant2_email"] . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - To Everyone\">Email Everyone</a>";
 ?>