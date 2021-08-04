<?php $layout_context = "homepage"; ?>
<?php require_once '_includes/session.php'; ?>
<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>

<?php
  $admin_set = find_all_admins();
?>
<?php $admin = mysqli_fetch_assoc($admin_set) ?>
<?php include '_includes/header.php'; ?>
<?php confirm_logged_in2(); ?>

<!-- Email buttons at top of page -->
<?php include '_includes/mass-email-links.php' ?>

<div id="flex-wrapper">
<?php 
	$id_count = 1;
	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {
		?>
<?php include '_includes/mass-email-variables.php' ?>
<div class="contact">
<div class="address-header">
	<?php echo 	"<p class=\"main-address\">" . htmlentities($contact_info["sun_creek_street_number"]) . " Sun Creek Drive</p>"; ?>
</div><!-- .address-header -->
<div class="card">

<?php require '_includes/contact-cards.php'; ?>

</div><!-- .card -->
</div><!-- .contact -->
	<?php
		$id_count++;	
	// end query while loop
		}
 	?>
</div><!-- #wrapper -->
<?php mysqli_free_result($result); ?>

<?php include '_includes/footer.php'; ?>