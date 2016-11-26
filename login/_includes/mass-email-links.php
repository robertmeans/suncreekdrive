
<div <?php if ($layout_context == "front-door") { echo " id=\"mass-email-links-front-door\""; } else { echo " id=\"mass-email-links\""; } ?>>
<?php
	// ############################### Email Links at Top #################################
	//
	// ############################################# Email Just the Owners
 	echo "<a class=\"email-links\" href=\"mailto:";
 	$result = return_all_content();
	while 	($contact_info = mysqli_fetch_assoc($result)) {

	$o1em = $contact_info["owner1_email"];
	$o2em = $contact_info["owner2_email"];

		if 	($o1em !== "") {
			echo $o1em . "; ";
		}
		if 	($o2em !== "") {
			echo $o2em . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Owners\">Email Just the Owners</a>";

	// ############################################# Email Just the Tenants
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {

	$t1em = $contact_info["tenant1_email"];
	$t2em = $contact_info["tenant2_email"];

		if ($t1em !== "") {
			echo $t1em . "; ";
		}
		if ($t2em !== "") {
			echo $t2em . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - All Tenants\">Email Just the Tenants</a>";

	// ############################################# Email All Current Residents
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {

	$o1em = $contact_info["owner1_email"];
	$o2em = $contact_info["owner2_email"];
	$t1em = $contact_info["tenant1_email"];
	$t2em = $contact_info["tenant2_email"];

		if (($o1em !== "") && ($t1em === ""))  {
			echo $o1em . "; ";
		}
		if (($o2em !== "") && ($t1em === "")) {
			echo $o2em . "; ";
		}
		if ($t1em !== "") {
			echo $t1em . "; ";
		}
		if ($t2em !== "") {
			echo $t2em . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - Current Residents\">Email Current Residents</a>";

	// ############################################# Email Everyone
 	echo "<a class=\"email-links\" href=\"mailto:";
 	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {

	$o1em = $contact_info["owner1_email"];
	$o2em = $contact_info["owner2_email"];
	$t1em = $contact_info["tenant1_email"];
	$t2em = $contact_info["tenant2_email"];

		if ($o1em !== "") {
			echo $o1em . "; ";
		}
		if ($o2em !== "") {
			echo $o2em . "; ";
		}
		if ($t1em !== "") {
			echo $t1em . "; ";
		}
		if ($t2em !== "") {
			echo $t2em . "; ";
		}
	}
	echo "?subject=Sun Creek HOA II - To Everyone\">Email Everyone</a>";

?>
</div>