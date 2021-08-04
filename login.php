<?php require_once("_includes/session.php"); ?>
<?php require '_db/connect.php'; ?>
<?php require_once("_includes/functions.php"); ?>
<?php require_once("_includes/validation-functions.php"); ?>

<?php
$username = "";
if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  
  if (empty($errors)) {
    // Attempt Login

    $username = $_POST["username"];
    $password = $_POST["password"];

    $found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
      // Mark user as logged in
      $_SESSION["admin_id"] = $found_admin["id"];
      $_SESSION["username"] = $found_admin["username"];
      redirect_to("homepage.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "admin"; ?>
<?php include("_includes/header.php"); ?>
  <div id="page">

<div class="login-box">
    <h2>Admin Login</h2>

    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>

    <form action="login.php" method="post">
      <div class="login-text">Username:</div>
      <div class="login-input-fields">
        <input class="pswd-box2" type="text" name="username" value="<?php echo htmlentities($username); ?>" autofocus />
      </div>
      <div class="login-text">Password:</div>
      <div class="login-input-fields">
        <input class="pswd-box2" type="password" name="password" value="" />
      </div>
      <div class="login-input"><a href="index.php">Cancel</a> <input type="submit" name="submit" value="Submit" /></div>
      
    </form>
  </div>
</div>


<?php include("_includes/footer.php"); ?>
