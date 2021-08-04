<!-- Email buttons at top of page -->
<?php require '_includes/mass-email-links.php' ?>

<div id="flex-wrapper">
<?php 
	$id_count = 1;
	mysqli_data_seek($result,0);
	while($contact_info = mysqli_fetch_assoc($result)) {

		?>
<?php require '_includes/mass-email-variables.php' ?>
<div class="contact">
<div class="address-header">
	<?php echo 	"<p class=\"main-address\">" . htmlentities($contact_info["sun_creek_street_number"]) . " Sun Creek Drive</p>"; ?>
</div><!-- .address-header -->
<div class="card">

<?php require '_includes/contact-cards.php'; ?>

</div><!-- .card -->
</div><!-- .contact -->
	<?php
	// end query while loop
			$id_count++;
		}	
 	?>
</div><!-- #wrapper -->
<?php mysqli_free_result($result); ?>

<?php include '_includes/footer.php'; ?>