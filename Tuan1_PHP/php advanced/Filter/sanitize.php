<!-- loai bo cac the html khoi một chuỗi -->
<?php 

	$str = '<h1> hello world ! </h1>';
	$newstr = filter_var($str , FILTER_SANITIZE_STRING);
	echo $newstr;
 ?>