<?php require_once("_includes/session.php"); ?>
<?php require '_db/connect.php'; ?>
<?php require_once("_includes/functions.php"); ?>
<?php require_once("_includes/validation-functions.php"); ?>
<?php // confirm_logged_in(); ?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("username" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    // Perform Create

    $username = mysql_prep($_POST["username"]);
    $hashed_password = password_encrypt($_POST["password"]);
    
    $query  = "INSERT INTO admins (";
    $query .= "  username, hashed_password";
    $query .= ") VALUES (";
    $query .= "  '{$username}', '{$hashed_password}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      $_SESSION["message"] = "Admin created.";
      redirect_to("manage-admins.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin creation failed.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "manage-admins"; ?>
<?php
  $admin_set = find_all_admins();
?>
<?php $admin = mysqli_fetch_assoc($admin_set) ?>
<?php include("_includes/header.php"); ?>


  <div class="login-box">
    <h2>Create Admin</h2>

    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>

    <form action="new-admin.php" method="post">
      <div class="login-text">Username:</div>
      <div class="login-input-fields">
        <input type="text" name="username" value="" autofocus />
      </div>
     <div class="login-text">Password:</div>
     <div class="login-input-fields">
        <input type="password" name="password" value="" />
      </div>
       <div class="login-input"><input type="submit" name="submit" value="Create" /></div>
       <a class="cancel-admins" href="manage-admins.php">Cancel</a>
    </form>
  </div>


<?php include("_includes/footer.php"); ?>
