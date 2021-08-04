<?php $layout_context = "manage-contacts"; ?>
<?php require_once '_includes/session.php'; ?>
<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php include '_includes/validation-functions.php'; ?>

<?php $admin_set = find_all_admins(); ?>
<?php $admin = mysqli_fetch_assoc($admin_set) ?>

<?php include '_includes/header.php'; ?>
<?php confirm_logged_in(); ?>

<div id="flex-wrapper-update">

<?php echo contact_update_message(); ?>

<?php 
	$result = return_all_content();
	while($contact_info = mysqli_fetch_assoc($result)) {
		?>
<?php include '_includes/mass-email-variables.php' ?>
<div class="contact-update">
<div class="address-header">
<?php 	echo 	"<p class=\"main-address\">" . htmlentities($contact_info["sun_creek_street_number"])
		 		. " Sun Creek Drive</p><a class=\"edit-link\" href=\"edit-contact.php?unit=" 
		 		. htmlentities($contact_info["sun_creek_street_number"]) 
		 		. "\" title=\"Edit\"> <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>"; 
	?>
</div><!-- .address-header -->

<div class="card-update">

<?php require '_includes/contact-cards.php'; ?>

</div><!-- .card-update -->
</div><!-- .contact -->
	<?php
	// end query while loop
		}
 	?>
</div><!-- #wrapper -->
<?php mysqli_free_result($result); ?>

<?php include '_includes/footer.php'; ?>