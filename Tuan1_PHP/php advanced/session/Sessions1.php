<?php 
	// start the session
	session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		PHP SESSION
 	</title>
 </head>
 <body>
 	<?php 
 		//set session variables
 		
 		$_SESSION['favcolor'] = "green";
 		$_SESSION['favanimal'] = "cat";
 		echo "Session variables are set";

       
 	 ?>
 </body>
 </html>