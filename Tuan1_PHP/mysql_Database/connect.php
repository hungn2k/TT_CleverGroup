<?php 
	$servername = "localhost";
	$username = "username";
	$password = "password";

	//create connnection
	//
	$conn = new mysqli($servername,$username,$password);

	//check connection
	//
	//if($conn ->connect_error){ //mysqli_connect_error
	if(!$conn){
		die("Connection failed: ".$conn->connect_error);
	}
	echo "Connected unsuccessfully";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>