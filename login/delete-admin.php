<?php require_once("_includes/session.php"); ?>
<?php require '_db/connect.php'; ?>
<?php require_once("_includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  // $admin = find_admin_by_id($_GET["id"]);
  if (!$admin) {
    // admin ID was missing or invalid or 
    // admin couldn't be found in database
    redirect_to("manage-admins.php");
  }
  
  $id = $admin["id"];
  $query = "DELETE FROM admins WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($connection, $query);

  if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
    $_SESSION["message"] = "Admin deleted.";
    redirect_to("manage-admins.php");
  } else {
    // Failure
    $_SESSION["message"] = "Admin deletion failed.";
    redirect_to("manage-admins.php");
  }
  
?>
