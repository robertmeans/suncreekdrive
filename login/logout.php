<?php require_once '_includes/session.php'; ?>
<?php require_once '_includes/functions.php'; ?>

<?php 
	$_SESSION["admin_id"] = null;
	$_SESSION["username"] = null;
	$_SESSION["session_first_password"] = null;
	redirect_to("index.php");

 ?>