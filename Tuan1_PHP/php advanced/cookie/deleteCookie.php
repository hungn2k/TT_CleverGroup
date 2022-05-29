
<?php 
		//set the expiration data to one hour ago
		setcookie("user"," ", time()- 3600);
?>
	<!DOCTYPE html>
	 <html>
	 <head>
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<title>
	 		delete cookie
	 	</title>
	 </head>
	 <body>
	 	<?php 
	 		echo "Cookie is deleted";
	 	 ?>
	 </body>
	 </html>