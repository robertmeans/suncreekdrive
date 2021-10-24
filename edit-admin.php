<?php require_once("_includes/session.php"); ?>
<?php require '_db/connect.php'; ?>
<?php require_once("_includes/functions.php"); ?>
<?php require_once("_includes/validation-functions.php"); ?>
<?php // confirm_logged_in(); ?>

<?php

$admin_id = $_GET["id"];
  $admin = find_admin_by_id($admin_id);
  
  // if ($admin) {
    // admin ID was missing or invalid or 
    // admin couldn't be found in database
    // redirect_to("logout.php");
  // }
?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "old-password", "password");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("username" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    
    // Perform Update

    $id = $admin["id"];
    $username = mysql_prep($_POST["username"]);
    $hashed_password = password_encrypt($_POST["password"]);
  
    $query  = "UPDATE admins SET ";
    $query .= "username = '{$username}', ";
    $query .= "hashed_password = '{$hashed_password}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
      // Success
      $_SESSION["message"] = "Admin updated.";
      redirect_to("manage-admins.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin update failed.";
    }
  
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "edit-admin"; ?>
<?php include("_includes/header.php"); ?>


  <div id="page">

<div class="login-wrap">
  <div class="login-box">
    
    <h2>Edit Admin: <?= $admin["username"]; ?></h2>

    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>
    
    <form action="edit-admin.php?id=<?php echo $admin["id"]; ?>" method="post">
      <div class="login-text">Username:</div>
      <div class="login-input-fields">
        <input type="text" name="username" value="<?php echo $admin["username"]; ?>" autofocus />
      </div>
       <div class="login-text">Old Password:</div>
      <div class="login-input-fields">
        <input type="password" name="old-password" value="" />
      </div>

      <div class="login-text">New Password:</div>
      <div class="login-input-fields">
        <input type="password" name="password" value="" />
      </div>

      <div class="login-input"><input type="submit" name="submit" value="Edit" /></div>
      <a class="edit-admin-cancel" href="manage-admins.php">Cancel</a>
    </form>
  </div>
 </div> 
</div>

<?php include("_includes/footer.php"); ?>
