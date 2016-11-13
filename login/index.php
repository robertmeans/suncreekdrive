<?php require_once '_includes/session.php'; ?>
<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php $layout_context = "front-door"; ?>
<?php include '_includes/header.php'; ?>

<?php
####################################################
$front_door_password = "80439";  
####################################################
?>


<?php 
// If password is valid let the user get access
if (isset($_POST["first_password"]) && ($_POST["first_password"]=="$front_door_password")) {
?>

<!-- Hidden content here -->
<?php include 'hidden-homepage.php'; ?>
<!-- End hidden content -->



<?php 
}
else
{
	print "<div class=\"login-container\">";
	print "<div class=\"login cf\">";
// Wrong password message
if (isset($_POST['first_password']) || $front_door_password == "") {
	print "<p><font color=\"red\"><em>Incorrect Password</em><br>Please enter the correct password</font><br><br></p>"
  ;}

	print "<form method=\"post\"><p align=\"center\">Enter code &nbsp;&nbsp;";
	print "<input id=\"pswd-box\" name=\"first_password\" type=\"password\" size=\"15\" maxlength=\"10\"><br>
	<input id=\"login-btn\" value=\"Login\" type=\"submit\"></p></form>";
	print "</div>";
	print "</div>";
	print "</body>";
	print "</html>";
}
?>

	

