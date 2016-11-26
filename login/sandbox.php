<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>

<?php 

function add_subtract($value1, $value2) {
  $add = $value1 + $value2;
  $subtract = $value1 - $value2;
  return array($add, $subtract);
}

$results = add_subtract(30,20);
echo "adding " . $results[0] . "<br />";
echo "subtract " . $results[1] . "<br />";

list($adding_results, $subtracting_results) = add_subtract(30,20);
echo "adding " . $results[0] . "<br />";
echo "subtract " . $results[1] . "<br />";

 ?>


<hr />
<?php 
function whats_up($freak) {
  echo "testing {$freak}<br />";
}

whats_up("function");

 ?>


<?php 

$count = 0;

while ($count <= 10) {
	echo $count . ".<br />";
	$count++;
}
 ?>
 <hr />
 <?php 

for ($count = 0; $count <= 10; $count++) {
	if ($count == 6) {
		break;
	}
	echo $count . " ) <br />";
}
  ?>
  <hr />

  <?php 
  $code = array(1,4,"a bunch",6,"of",9,33,"code");

  echo $code[2] . $code[2] . " " . $code[4] . " " . $code[7] . ".<br />";
  echo print_r($code);

   ?>
   <pre>
   	<?php echo print_r($code); ?>
   </pre>
   <?php echo implode($code); ?>



 <script src="http://localhost:35729/livereload.js"></script>
 </body>
 </html>