<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sandbox2</title>
</head>
<body>
	

<?php 


	if ($_GET['category'] == 'hello & there') {
		echo "Success";
	} else {
		echo "nope";
	}


 ?>
<pre>
	<?php print_r($_GET); ?>
</pre>


</body>
</html>