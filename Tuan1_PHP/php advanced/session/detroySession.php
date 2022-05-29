<?php 
	session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		Destroyo a PHP Session
 	</title>
 </head>
 <body>
 	<?php 

 	//remove all session variables
 	session_unset();

 	//destroy the session
 	//
 	session_destroy();
 	
 	echo "All session variables are now removed, and the session is destroyed."
 	 ?>
 </body>
 </html>