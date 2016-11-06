<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Page</title>
</head>
<body>
	
<?php 
$count = 0;

while ($count <= 10) {
	
	if ($count == 0) {
		echo $count . " this is zero<br />";
	} elseif ($count % 2) {
		echo $count . "<br />";
	} else {
		echo "<b>" . $count . "</b> is even<br />";
	}
	$count++;
}
echo "<br />";
echo "Count = {$count}";

 ?>

<br />
<?php 
	for($count = 0; $count <= 10; $count++) {
		echo $count . "<br />";
	}

 ?>


<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>