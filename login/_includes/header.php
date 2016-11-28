<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Sun Creek HOA II</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body 	<?php 		if (($layout_context == "manage-contacts") || ($layout_context == "edit-contacts")) { echo " class=\"edit-page\""; } ?>>
<header <?php 		if ($layout_context == "manage-contacts") { echo " class=\"edit-page\""; } ?>>
<div class="header-nav"><?php 

	switch ($layout_context) {
		case 'admin-logged-in' 	:	echo "<span class=\"greetings\">Logged in as: &nbsp;" . htmlentities($_SESSION["username"]) . "</span>";
									echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
									echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";
									echo "<a class=\"header-link\" href=\"logout.php\">Logout</a>"; 	break;

		case 'manage-admins'	:	echo "<span class=\"greetings\">Logged in as: &nbsp;" . htmlentities($_SESSION["username"]) . "</span>";
									echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
									echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";
									echo "<a class=\"header-link\" href=\"logout.php\">Logout</a>"; 	break;

		case 'homepage'			:	echo "<span class=\"greetings\">Logged in as: &nbsp;" . htmlentities($_SESSION["username"]) . "</span>";
									echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";
									echo "<a class=\"header-link\" href=\"logout.php\">Logout</a>"; 	break;

		case 'manage-contacts'	:	echo "<span class=\"greetings\">Logged in as: &nbsp;" . htmlentities($_SESSION["username"]) . "</span>";
									echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
									echo "<a class=\"header-link\" href=\"logout.php\">Logout</a>"; 	break;

		case 'edit-contacts'	: 	echo "<span class=\"greetings\">Logged in as: &nbsp;" . htmlentities($_SESSION["username"]) . "</span>";
									echo "<a class=\"header-link\" href=\"manage-contacts.php\">Cancel</a>"; break;

		case 'admin'			:	echo "<a class=\"header-link\" href=\"index.php\">Cancel</a>";			break;

		default 				:	echo "<a class=\"header-link\" href=\"login.php\">Manage Site</a>"; 	break;
	}
	 
?></div>
</header>