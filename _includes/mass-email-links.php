
<div <?php if ($layout_context == "front-door") { echo " id=\"mass-email-links-front-door\""; } else { echo " id=\"mass-email-links\""; } ?>>
	
<!-- <div class="copy-info">
	The email links on this page are
	If the email links do not open your email editor and autopopulate the &quot;To:&quot; field, you can use this icon <i class="far fa-copy fa-fw"></i> to copy the email list to your clipboard.
</div> -->

<?php
	// ############################### Email Links at Top #################################
	//

	// ############################################# Email All Current Residents
?><form class="emlinks"><input type="hidden" id="sr_03" value="<?php 

 	$result = return_all_content();
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
	?>">

<a data-role="srcb" data-id="sr_03" class="email-links">Email Current Neighbors <i class="far fa-copy fa-fw"></i></a>
</form>
	<?php

	// ############################################# Email Just the Tenants
?><form class="emlinks"><input type="hidden" id="sr_02" value="<?php 	

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
	?>">

<a data-role="srcb" data-id="sr_02" class="email-links">Email Just the Renters <i class="far fa-copy fa-fw"></i></a>
</form>
	<?php

	// ############################################# Email Just the Owners
?><form class="emlinks"><input type="hidden" id="sr_01" value="<?php 
 	
 	mysqli_data_seek($result,0);
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
	?>">

<a data-role="srcb" data-id="sr_01" class="email-links">Email Just the Owners <i class="far fa-copy fa-fw"></i></a>
</form>
	<?php
	
	// ############################################# Email Everyone
?><form class="emlinks"><input type="hidden" id="sr_04" value="<?php 

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
	?>">

<a data-role="srcb" data-id="sr_04" class="email-links">Email Owners + Renters <i class="far fa-copy fa-fw"></i></a>
</form>
</div>