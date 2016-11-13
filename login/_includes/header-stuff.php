<body<?php if ($layout_context == "admin") { echo " class=\"edit-page\""; } ?>>
<header<?php if ($layout_context == "admin") { echo " class=\"edit-page\""; } ?>>
<div class="header-nav"><?php   
	if ($layout_context == "admin") { 
		echo "<a class=\"header-link\" href=\"index.php\">Home</a>"; 
	} else { 
		echo "<a class=\"header-link\" href=\"login.php\">Admin</a>"; 
	} 
		?></div>
</header>