<?php
####################################################
$password = "80439";  
####################################################
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Sun Creek Drive HOA II</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Courgette|Lato' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php 
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>

<!-- Hidden content here -->
<?php include 'content.php'; ?>
<!-- End hidden content -->

<?php 
}
else
{
	print "<div class=\"login-container\">";
	print "<div class=\"login cf\">";
// Wrong password message
if (isset($_POST['password']) || $password == "") {
	print "<p><font color=\"red\"><em>Incorrect Password</em><br>Please enter the correct password</font><br><br></p>"
  ;}

  print "<form method=\"post\"><p align=\"center\">Enter code ";
  print "<input id=\"pswd-box\" name=\"password\" type=\"password\" size=\"15\" maxlength=\"10\"><br>
  <input id=\"login-btn\" value=\"Login\" type=\"submit\"></p></form>";
  print "</div>";
  print "</div>";
}
?>

<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>
