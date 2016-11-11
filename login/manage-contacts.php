<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php include '_includes/header.php'; ?>

<div id="flex-wrapper-update">
<?php 
	$result = return_all_content();
	while($contact_info = mysqli_fetch_assoc($result)) {
		?>
<?php include '_includes/mass-email-variables.php' ?>
<div class="contact-update">

<div class="address-header">
<?php 	echo 	"<p class=\"main-address\">" . $contact_info["sun_creek_street_number"]
		 		. " Sun Creek Drive</p><a class=\"edit-link\" 
		 		href=\"edit-contact.php?unit=" . $contact_info["sun_creek_street_number"] . 
		 		"\" title=\"Edit\">
				<i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
		 		</a>"; 
	?>
</div><!-- .address-header -->

<div class="card-update">
	<?php
		// ############################### Owner Information #################################
		//
		// ########################### Owner Names and Email Links ###########################
		//
		// different last names, both have email addresses
		if (($o1ln !== $o2ln) && ($o1em !== "x" && $o2em !== "x")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . " " . $o1ln . "</a> <br />" . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . " " . $o2ln . "</a></p>";

		// same last names, owner1 has email address, owner2 does not
		} elseif (($o1ln === $o2ln) && (($o1em !== "x") && ($o2em === "x"))) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn . "</a> &amp; " . $o2fn . "</a> " . $o1ln . "</p>";	

		// same last names, owner1 does not have email address, owner2 does
		} elseif (($o1ln === $o2ln) && (($o1em === "x") && ($o2em !== "x"))) {
			echo "<p class=\"pad\">" . $o1fn . " &amp; " . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . "</a> " . $o1ln . "</p>";

		// same last names and both have email addresses
		} elseif (($o1ln === $o2ln) && (($o1em !== "x") && ($o2em !== "x"))) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn  ."</a> &amp; " . "<a href=\"mailto:" . $o2em . "\">" . $o2fn . "</a> " . $o1ln . " &nbsp;&nbsp;[ <a href=\"mailto:" . $o1em . "; " . $o2em . "\">" . "email both</a> ] </p>";

		// only 1 owner (owner1)
		} elseif (($o1em !== "x") && ($o2em === "x")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o1em . "\">" . $o1fn  . " " . $o1ln . "</a></p>";

		// only 1 owner but for some reason they submitted that owner as "owner2"
		} elseif (($o1em === "x") && ($o2em !== "x")) {
			echo "<p class=\"pad\"><a href=\"mailto:" . $o2em . "\">" . $o2fn  . " " . $o2ln . "</a></p>";

		} else {
			echo "You're trying to break this, I can tell.<br />";
		}

		// ########################### Owner Phone Numbers ###########################
		// Owner home phone number
		if ($ohp !== "x") {
				$data = $ohp;
				echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
				echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";	
		
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// Owner1 cell number
		if ($o1c !== "x") {
			$data = $o1c;
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $o1fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// Owner 2 cell number
		if ($o2c !== "x") {
			$data = $o2c;
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $o2fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br /><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// ########################### Owner alternate home address ###########################
		// Owner alternate home address
		if ($oas1 !== "x") {
			echo "<p class=\"underline\">Owner Mailing Address</p>";
			echo $oas1 . "<br />";
		}
		if ($oas2 !== "x") {
			echo $oas2 . "<br />";
		}
		if ($oac !== "x") {
			echo $oac . ", ";
		}
		if ($oas !== "x") {
			echo $oas . "&nbsp;&nbsp;";
		}
		if ($oaz !== "x") {
			echo $oaz;
		}

		// If a tenant exists, draw a horizontal line
		if (($t1fn !== "x") || ($t2fn !== "x")) {
			echo "<hr class=\"owner-tenant-divider\" />";
			echo "<p class=\"underline\">Tenant Information</p>";
		} 

		// ########################### Tenant information ###########################
		// Names & emails
		// different last names, both have email addresses
		if (($t1ln !== $t2ln) && ($t1em !== "x" && $t2em !== "x")) {
			echo "<a href=\"mailto:" . $t1em . "\">" . $t1fn . " " . $t1ln . "</a> <br />" . "<a href=\"mailto:" . $t2em . "\">" . $t2fn . " " . $t2ln . "</a> <br />";

		// different last names, tenant1 does not have email address
		} elseif (($t1ln === $t2ln) && (($t1em !== "x") && ($t2em === "x"))) {
			echo "<a href=\"mailto:" . $t1em . "\">" . $t1fn . "</a> &amp; " . $t2fn . "</a> " . $t1ln . "<br />";	

		// different last names, tenant2 does not have email address
		} elseif (($t1ln === $t2ln) && (($t1em === "x") && ($t2em !== "x"))) {
			echo $t1fn . "&amp; " . "<a href=\"mailto:" . $t2em . "\">" . $t2fn . "</a> " . $t1ln . "<br />";

		// same last names and both have email addresses
		} elseif (($t1ln === $t2ln) && (($t1em !== "x") && ($t2em !== "x"))) {
			echo "<a href=\"mailto:" . $t1em . "\">" . $t1fn  ."</a> &amp; " . "<a href=\"mailto:" . $t2em . "\">" . $t2fn . "</a> " . $t1ln . " &nbsp;&nbsp;[ <a href=\"mailto:" . $t1em . "; " . $t2em . "\">" . "email both</a> ] " . "<br />";
 
		// only 1 tenant
		} elseif (($t1em !== "x") && ($t2em === "x")) {
			echo "<a href=\"mailto:" . $t1em . "\">" . $t1fn  . " " . $t1ln . "</a><br />";

		// only 1 tenant but for some reason they submitted that owner as "owner 2"
		} elseif (($t1em === "x") && ($t2em !== "x")) {
			echo "<a href=\"mailto:" . $t2em . "\">" . $t2fn  . " " . $t2ln . "</a> <br />";

		// if both tenant fields are empty
		} elseif (($t1em === "x") && ($t2em === "x")) {
			echo "<p class=\"hide\">";
		} else {
			echo "You're trying to break this, I can tell.<br />";
		}

		// ########## Tenant phone numbers ##########
		// tenant home number
		if ($thp !== "x") {
			$data = $thp;
			echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
			echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

		} else {
			echo "<p class=\"hide\">this is an empty string </p>";
		}

		// tenant1 cell number
		if ($t1c !== "x") {
			$data = $t1c;
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
			$t1fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";

		}

		// tenant2 cell number
		if ($t2c !== "x") {
			$data = $t2c;
			echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
			$t2fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br /><br />";
		} else {
			echo "<p class=\"hide\">this is an empty string </p>";

		}

		if (($contact_info["notes"] !== "x")) {
			echo "<p class=\"notes\">" . $contact_info["notes"] . "</p>";
				}

		 ?>

</div><!-- .card -->
</div><!-- .contact -->
	<?php
	// end query while loop
		}
 	?>
</div><!-- #wrapper -->
<?php mysqli_free_result($result); ?>

<?php include '_includes/footer.php'; ?>