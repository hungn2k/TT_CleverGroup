<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		PHP File Open/Read/Close
	</title>
</head>
<body>
<!-- 	<?php 
		$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file");
		echo fread($myfile,filesize("webdictionary.txt"));
		fclose($myfile);
 	?> -->	
<!-- 
 	<?php 
 		//fgets() duoc su dung de doc mot dong duy nhat tu mot tep --> con tro chuyen den dong tiep theo
 		//
 		$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
 		echo fgets($myfile);
 		fclose($myfile);
 	 ?> -->

 	<!--  <?php 
 	 	// check End of File: feof()
 	 	// lap lai thong qua du lieu co do dai khong xac dinh
 	 	// 
 	 	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file");

 	 	//output one line until end of file
 	 	//
 	 	while (!feof($myfile)) {
 	 		echo fgets($myfile)."<br>";
 	 	}
 	 	
 	 	fclose($myfile);
 	  ?>
 -->
 	  <?php 
 	  	// fgetc(): doc mot ky tu duy nhat tu tep
 	  	// 
 	  	$myfile = fopen("webdictionary.txt", "r" ) or die("Unable to open file!");

 	  	// output one character until end of file
 	  	// 
 	  	while (!feof($myfile)) {
 	  		echo fgetc($myfile)."<br>";
 	  	}
 	   ?>
</body>
</html>

