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
<body<?php if ($layout_context == "manage-contacts") { echo " class=\"edit-page\""; } ?>>
<header<?php if ($layout_context == "manage-contacts") { echo " class=\"edit-page\""; } ?>>
<div class="header-nav"><?php   
	if ($layout_context == "admin") { 
		echo "<a class=\"header-link\" href=\"index.php\">Home</a>"; 
	} elseif ($layout_context == "admin-logged-in") { 
		echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
		echo "<a class=\"header-link\" href=\"manage-admins.php\">Admin</a>"; 
		echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";
	} elseif ($layout_context == "manage-admins") { 
		echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
		echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";	
	} elseif ($layout_context == "homepage") { 
		echo "<a class=\"header-link\" href=\"manage-admins.php\">Admin</a>"; 
		echo "<a class=\"header-link\" href=\"manage-contacts.php\">Edit</a>";	
	} elseif ($layout_context == "manage-contacts") { 
		echo "<a class=\"header-link\" href=\"homepage.php\">Home</a>";
		echo "<a class=\"header-link\" href=\"manage-admins.php\">Admin</a>";
	} elseif ($layout_context == "edit-contacts") { 
		echo "<a class=\"header-link\" href=\"manage-contacts.php\">Cancel</a>";
		echo "<a class=\"header-link\" href=\"manage-admins.php\">Admin</a>"; 		 
	} else {
		echo "<a class=\"header-link\" href=\"login.php\">Manage Site</a>"; 
	}
	 
		?></div>
</header>