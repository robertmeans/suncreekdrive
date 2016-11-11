<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php include '_includes/header.php'; ?>


<?php 

	if (isset($_GET["unit"])) {
		$current_contact_to_edit = $_GET["unit"];
	} else {
		$current_contact_to_edit = null;
		echo "denied!";
	}
 ?>


<div id="flex-wrapper-update">
<div class="contact-update">
<div class="address-header">
	<?php echo 	"<p class=\"main-address\">" . $current_contact_to_edit . " Sun Creek Drive</p>"; ?>
</div><!-- .address-header -->
<div class="card-update">

<?php  	
// This has to stay here b/c it echos an error 
// onto the card if bogus address is entered into url
$this_info = find_contact_by_address($current_contact_to_edit);
include '_includes/edit-contact-variables.php';
?>

<form action="update-contact.php" method="post">
<p>Owner 1 First Name: <input type="text" name="owner1_first_name" value="<?php echo $o1fn; ?>" /></p>


<?php 
// echo $o1ln; 
?>


<br />
<input type="submit" name="submit" value="Update" /><br />
<br />
<a href="index.php">cancel</a>

</form>

</div><!-- .card -->
</div><!-- .contact -->

</div><!-- #wrapper -->


<?php include '_includes/footer.php'; ?>