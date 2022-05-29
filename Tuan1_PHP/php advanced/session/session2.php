<!-- // lay gia tri php session

//truy cap thong tin session o session1.php -->

<?php 
	session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		PHP session
 	</title>
 </head>
 <body>
 <?php 
 	//echo session variables tha were set on previous page
 	echo "favorite color is ". $_SESSION['favcolor']. "<br>";
 	echo "Favorite animal is ".$_SESSION['favanimal']."<br>";

 	 print_r($_SESSION['favcolor']);

 	 // to change a session variable, just overwrite it
	$_SESSION["favcolor"] = "yellow";
	print_r($_SESSION);
  ?>
 </body>
 </html>