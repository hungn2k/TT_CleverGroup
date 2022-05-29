<!DOCTYPE html>
<?php 
	// setcookie("test_cookie", "test", time() + 3600,'/' );
	setcookie("test_cookie", "",time() - 3600);
	// set the expiration date to one hour ago
 ?>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Check Cookie</title>
 </head>
 <body>
 	<?php 
 	if (count($_COOKIE)>0) {
 		echo "Cookies are enabled";
 	}else{
 		echo "Cookies are disable";
 	}
 	?>
 </body>
 </html>