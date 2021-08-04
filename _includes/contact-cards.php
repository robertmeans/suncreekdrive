<?php
	// ############################### Owner Information #################################
	//
	// ########################### Owner Names and Email Links ###########################
	//
	// different last names, both have email addresses
	if (($o1ln !== $o2ln) && ($o1em !== "" && $o2em !== "")) {
		echo "<p class=\"pad\"><a href=\"mailto:{$o1em}\">{$o1fn} {$o1ln}</a><br /><a href=\"mailto:{$o2em}\">{$o2fn} {$o2ln}</a></p>";

	// different last names, same email addresses and o1 has an email (at least 1 is not empty, assumes o1)
	} elseif (($o1ln !== $o2ln) && (($o1em === $o2em) && ($o1em !== ""))) {
		echo "<p class=\"pad\"><a href=\"mailto:{$o1em}\">{$o1fn} {$o1ln}<br />{$o2fn} {$o2ln}</a></p>";

	// 2 owners, different last names, neither has email
	} elseif (($o1ln !== $o2ln) && (($o1em === "") && ($o2em === ""))) {
		echo "<p class=\"pad\">{$o1fn} {$o1ln}<br />{$o2fn} {$o2ln}</p>";

	// 1 owner, no email
	} elseif (((($o1fn !== "") && ($o1em === "")) && (($o2fn === "") && ($o2ln === "")))) {
		echo "<p class=\"pad\">{$o1fn} {$o1ln}</p>";	

	// 1 owner, no email and for some reason entered as owner2
	} elseif (((($o2fn !== "") && ($o2em === "")) && (($o1fn === "") && ($o1ln === "")))) {
		echo "<p class=\"pad\">{$o2fn} {$o2ln}</p>";







	// different last names, owner1 has email, owner2 does not
	// 08.03.21 * currently being used by all single owners * 
	} elseif (($o1ln !== $o2ln) && ($o1em !== "" && $o2em === "")) { ?>
		<div class="pad">
			<a href="mailto:<?= $o1em ?>" target="_blank"><?= $o1fn . ' ' . $o1ln ?></a>
			<?= $o2fn . ' ' . $o2ln ?>
			<span id="<?= $id_count ?>" style="display:none;"><?= $o1em ?></span>
			<a data-role="emcc" data-id="<?= $id_count ?>"><i class="far fa-copy fa-fw"></i></a>
		</div>






<?php

	// different last names, owner1 does not have email, owner2 does
	} elseif (($o1ln !== $o2ln) && ($o1em === "" && $o2em !== "")) {
		echo "<p class=\"pad\">{$o1fn} {$o1ln}<br /><a href=\"mailto:\"{$o2em}\">{$o2fn} {$o2ln}</a></p>";









	// same last names, owner1 has email address, owner2 does not
	// 08.03.21 - currently being used by Brett & Tammy configurations
	} elseif (($o1ln === $o2ln) && (($o1em !== "") && ($o2em === ""))) { ?>
		<div class="pad">
			<span id="<?= $id_count ?>" style="display:none;"><?= $o1em ?></span>
			<a href="mailto:<?= $o1em ?>" target="_blank"><?= $o1fn ?></a><a data-role="emcc" data-id="<?= $id_count ?>"><i class="far fa-copy fa-fw"></i></a> &amp; <?= $o2fn . ' ' . $o2ln ?>
	  </div>

<?php







	// both have last names, same last name, same email (Brett & Tammy)
	// 08.03.21 - doesn't show up anywhere 
	} elseif ((($o1ln !== "") && ($o2ln !== "")) && (($o1ln === $o2ln) && ($o1em === $o2em))) { ?>
		<p class="pad"><a id="<?= $id_count ?>" href="mailto:<?= $o1em ?>"><?= $o1fn . '</a> & ' . $o2fn . ' ' . $o2ln ?></p>

<?php

	// same last names, owner1 does not have email address, owner2 does
	// 08.03.21 - currently used for Barbara Wallace
	} elseif (($o1ln === $o2ln) && (($o1em === "") && ($o2em !== ""))) { ?>
		<div class="pad">
			<span id="<?= $id_count ?>" style="display:none;"><?= $o2em ?></span>
			<?= $o1fn ?> &amp; <a href="mailto:<?= $o2em ?>" target="_blank"><?= $o2fn ?></a><a data-role="emcc" data-id="<?= $id_count ?>"><i class="far fa-copy fa-fw"></i></a> <?= $o1ln ?>
		</div>


<?php





	// same last names and both have email addresses
	// 08.03.21 - Dennis & Nancy
	} elseif (($o1ln === $o2ln) && (($o1em !== "") && ($o2em !== ""))) { ?>
		<div class="pad">
			<span id="<?= $id_count ?>" style="display:none;"><?= $o1em ?></span>
			<span id="<?= $id_count . '2' ?>" style="display:none;"><?= $o2em ?></span>
			<span id="<?= $id_count . '3' ?>" style="display:none;"><?= $o1em . ';' . $o2em ?></span>

			<a href="mailto:<?= $o1em ?>" target="_blank"><?= $o1fn ?></a><a data-role="emcc" data-id="<?= $id_count ?>"><i class="far fa-copy fa-fw"></i></a>

			 &amp; <a href="mailto:<?= $o2em ?>" target="_blank"><?= $o2fn ?></a><a data-role="emcc" data-id="<?= $id_count . '2' ?>"><i class="far fa-copy fa-fw"></i></a>

			  <?= $o1ln ?>

			  <span class="large-566-gone"><br /></span><span class="small-565-gone">&nbsp;&nbsp;&nbsp;</span>[ <a href="mailto:<?= $o1em . ';' . $o2em ?>" target="_blank">email both</a><a data-role="emcc" data-id="<?= $id_count . '3' ?>"><i class="far fa-copy fa-fw"></i></a> ]
		</div>

<?php





	// only 1 owner (owner1)
	// 08.03.21 - not being used for all single owners because it's caught above.
	} elseif (($o1em !== "") && ($o2em === "")) { ?>
	<p class="pad"><a id="<?= $id_count; ?>" href="mailto:<?= $o1em ?>"><?= $o1fn . ' ' . $o1ln ?></a><br /><?= $o2fn . ' ' . $o2ln ?></p>

<?php
	// only 1 owner but for some reason they submitted that owner as "owner2"
	} elseif (($o1em === "") && ($o2em !== "")) {
		echo "<p class=\"pad\"><a href=\"mailto:{$o2em}\">{$o2fn} {$o2ln}</a></p>";

	} else {
		echo "Unique combination of data entered. New rule required. Thank you! You're heplping build this.<br /><br />";
	}

	// ########################### Owner Phone Numbers ###########################
	// Owner home phone number
	if ($ohp !== "") {
			$data = $ohp;
			echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
			echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";	
	
	} else {
		echo "<p class=\"hide\">this is an empty string </p>";
	}

	// Owner1 cell number
	if ($o1c !== "") {
		$data = $o1c;
		echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $o1fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

	} else {
		echo "<p class=\"hide\">this is an empty string </p>";
	}

	// Owner 2 cell number
	if ($o2c !== "") {
		$data = $o2c;
		echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . $o2fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

	} else {
		echo "<p class=\"hide\">this is an empty string </p>";
	}

	// ########################### Owner alternate home address ###########################
	// Owner alternate home address
	if ($oas1 !== "") {
		echo "<br /><p class=\"underline\">Owner Mailing Address</p>";
		echo $oas1 . "<br />";
	}
	if ($oas2 !== "") {
		echo $oas2 . "<br />";
	}
	if ($oac !== "") {
		echo $oac . ", ";
	}
	if ($oas !== "") {
		echo $oas . "&nbsp;&nbsp;";
	}
	if ($oaz !== "") {
		echo $oaz;
	}

	// If a tenant exists, draw a horizontal line
	if (($t1fn !== "") || ($t2fn !== "")) {
		echo "<hr class=\"owner-tenant-divider\" />";
		echo "<p class=\"underline\">Tenant Information</p>";
	} 

	// ########################### Tenant information ###########################
	// Names & emails
	// different last names, both have email addresses
	// 08.03.21 - updated
	// NOTE: Add '11', '22', etc. to prefix of $id_count
	// to avoid duplicates from Owners info
	if (($t1ln !== $t2ln) && ($t1em !== "" && $t2em !== "")) { ?>
		<div class="pad">
			<span id="<?= '11' . $id_count ?>" style="display:none;"><?= $t1em ?></span>
			<span id="<?= '22' . $id_count ?>" style="display:none;"><?= $t2em ?></span>

			<a href="mailto:<?= $t1em ?>" target="_blank"><?= $t1fn . ' ' . $t1ln ?></a><a data-role="emcc" data-id="<?= '11' . $id_count ?>"><i class="far fa-copy fa-fw"></i></a>
			<br />
			<a href="mailto:<?= $t2em ?>" target="_blank"><?= $t2fn . ' ' . $t2ln ?></a><a data-role="emcc" data-id="<?= '22' . $id_count ?>"><i class="far fa-copy fa-fw"></i></a>
		</div>


<?php




	// different last names, same email addresses and t1 has an email (at least 1 is not empty, assumes t1)
	} elseif (($t1ln !== $t2ln) && (($t1em === $t2em) && ($t1em !== ""))) {
		echo "<p class=\"pad\"><a href=\"mailto:{$t1em}\">{$t1fn} {$t1ln}<br />{$t2fn} {$t2ln}</a></p>";

	// 2 tenants, different last names, neither has email
	} elseif (($t1ln !== $t2ln) && (($t1em === "") && ($t2em === ""))) {
		echo "<p class=\"pad\">{$t1fn} {$t1ln}<br />{$t2fn} {$t2ln}</p>";

	// 1 tenant, no email
	} elseif (((($t1fn !== "") && ($t1em === "")) && (($t2fn === "") && ($t2ln === "")))) {
		echo "<p class=\"pad\">{$t1fn} {$t1ln}</p>";	

	// 1 tenant, no email and for some reason entered as tenant2
	} elseif (((($t2fn !== "") && ($t2em === "")) && (($t1fn === "") && ($t1ln === "")))) {
		echo "<p class=\"pad\">{$t2fn} {$t2ln}</p>";



	// only 1 tenant (tenant1)
	// 08.03.21 - this is me!
	} elseif (($t1em !== "") && ($t2em === "")) { ?>
		<div class="pad">
			<span id="<?= '11' . $id_count ?>" style="display:none;"><?= $t1em ?></span>
			<a href="mailto:<?= $t1em ?>" target="_blank"><?= $t1fn . ' ' . $t1ln ?></a><a data-role="emcc" data-id="<?= '11' . $id_count ?>"><i class="far fa-copy fa-fw"></i></a>
		</div>

<?php




	// different last names, tenant1 has email, tenant2 does not
	} elseif (($t1ln !== $t2ln) && ($t1em !== "" && $t2em === "")) {
		echo "<p class=\"pad\"><a href=\"mailto:{$t1em}\">{$t1fn} {$t1ln}</a><br />{$t2fn} {$t2ln}</p>";

	// different last names, tenant1 does not have email, tenant2 does
	} elseif (($t1ln !== $t2ln) && ($t1em === "" && $t2em !== "")) {
		echo "<p class=\"pad\">{$t1fn} {$t1ln}<br /><a href=\"mailto:\"{$t2em}\">{$t2fn} {$t2ln}</a></p>";






	// same last names, tenant1 has email address, tenant2 does not
	} elseif (($t1ln === $t2ln) && (($t1em !== "") && ($t2em === ""))) { ?>
		<div class="pad">
			<span id="<?= '11' . $id_count ?>" style="display:none;"><?= $t1em ?></span>
			<a href="mailto:<?= $t1em ?>" target="_blank"><?= $t1fn ?></a><a data-role="emcc" data-id="<?= '11' . $id_count ?>"><i class="far fa-copy fa-fw"></i></a> &amp; <?= $t2fn . ' ' . $t1ln ?>
		</div>








<?php

	// same last names, same email (trying to cover the extreme here)
	} elseif ((($t1ln !== "") && ($t2ln !== "")) && (($t1ln === $t2ln) && ($t1em === $t2em))) {
		echo "<p class=\"pad\"><a href=\"mailto:{$t1em}\">{$t1fn} &amp; {$t2fn} {$t1ln}</a></p>";

	// same last names, tenant1 does not have email address, tenant2 does
	} elseif (($t1ln === $t2ln) && (($t1em === "") && ($t2em !== ""))) {
		echo "<p class=\"pad\">{$t1fn} &amp; <a href=\"mailto:{$t2em}\">{$t2fn}</a> {$t1ln}</p>";

	// same last names and both have email addresses
	} elseif (($t1ln === $t2ln) && (($t1em !== "") && ($t2em !== ""))) {
		echo "<p class=\"pad\"><a href=\"mailto:{$t1em}\">{$t1fn}</a> &amp; <a href=\"mailto:{$t2em}\">{$t2fn}</a> {$t1ln}<span class=\"large-566-gone\"><br /></span><span class=\"small-565-gone\">&nbsp;&nbsp;&nbsp;</span>[ <a href=\"mailto:{$t1em}; {$t2em}\">email both</a> ]</p>";

	// same last names and neither has email (last name could be empty)
	} elseif ((($t1fn !== "") && ($t2fn !== "")) && (($t1em === "") && ($t2em ===""))) {
		echo "<p class=\"pad\">{$t1fn} &amp; {$t2fn}</p>"; ?>








<?php 
	// only 1 tenant but for some reason they submitted that tenant as "tenant2"
	} elseif (($t1em === "") && ($t2em !== "")) {
		echo "<p class=\"pad\"><a href=\"mailto:{$t2em}\">{$t2fn} {$t2ln}</a></p>";

	// if both first name tenant fields are empty (no tenants)
	} elseif (($t1fn === "") && ($t2fn === "")) {
		echo "<p class=\"hide\">";	

	} else {
		echo "Unique combination of data entered. New rule required. Thank you! You're heplping build this.<br /><br />";
	}

	// ########## Tenant phone numbers ##########
	// tenant home number
	if ($thp !== "") {
		$data = $thp;
		echo "<i class=\"fa fa-home\" aria-hidden=\"true\"></i> &nbsp;";
		echo "Home: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";

	} else {
		echo "<p class=\"hide\">this is an empty string </p>";
	}

	// tenant1 cell number
	if ($t1c !== "") {
		$data = $t1c;
		echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
		$t1fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";
	} else {
		echo "<p class=\"hide\">this is an empty string </p>";

	}

	// tenant2 cell number
	if ($t2c !== "") {
		$data = $t2c;
		echo "<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i> &nbsp;" . 
		$t2fn . "'s cell: <a class=\"tel-link\" href=\"tel: (" .substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "\">(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6) . "</a><br />";
	} else {
		echo "<p class=\"hide\">this is an empty string </p>";

	}

	if (($contact_info["notes"] !== "")) {
		echo "<p class=\"notes\">" . nl2br(htmlentities($contact_info["notes"])) . "</p>";
			}

 ?>