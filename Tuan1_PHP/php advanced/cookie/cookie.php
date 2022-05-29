<?php 
	$cookie_name = "user";
	$cookie_value = "John doe";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	// dau / co nghi la cookie co san trong toan bo trang web 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Cookie php
	</title>
</head>
<body>
	<?php 
	if(!isset($_COOKIE[$cookie_name])){

		echo "Cookie named '".$cookie_name . "'is not set!";
	} else{
		echo "Cookie '". $cookie_name . "' isi set !<br>";
		echo "value is: ". $_COOKIE[$cookie_name];
	} 
	?>
	

</body>
</html>