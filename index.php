<?php require_once '_includes/session.php'; ?>
<?php require '_db/connect.php'; ?>
<?php require_once '_includes/functions.php'; ?>
<?php $layout_context = "front-door"; ?>
<?php include '_includes/header.php'; ?>

<?php

$front_door_password = "80439";  

// If session password exists let visitor in and skip everything else
if (isset($_SESSION["session_first_password"]) == "$front_door_password") {
	include 'hidden-homepage.php';

	// If no session password exists keep on going...
	} elseif (!isset($_SESSION["session_first_password"])) {

	// Display login dialog and post to itself
	if ((isset($_POST["first_password"]) && ($_POST["first_password"] == "$front_door_password"))) {
		
	// If password passes, set session cookie and show content
	$_SESSION["session_first_password"] = $_POST["first_password"];
	include 'hidden-homepage.php';

	// If password did not match show error and try again
	} else {
		echo 	"<div class=\"login-container\">";
		echo 	"<div class=\"login cf\"><div class=\"rounded-corners cf\">";

		// Wrong password error message
		if (isset($_POST['first_password']) || $front_door_password == "") {
			echo 	"<p class=\"u b\">Incorrect Password</p><br />
					<p class=\"front-door-error\">Please enter the correct password</font><br /><br /></p>";
				}

		echo 	"<form method=\"post\"><p align=\"center\">Enter code &nbsp;&nbsp;";
		echo 	"<input class=\"pswd-box\" name=\"first_password\" type=\"tel\" size=\"15\" maxlength=\"10\"  autofocus><br />
				<input id=\"login-btn\" value=\"Login\" type=\"submit\"></p></form>";
		echo 	"</div>";
		echo 	"</div></div>";
		echo 	"</body>";
		echo 	"</html>";

		}

}

?>



