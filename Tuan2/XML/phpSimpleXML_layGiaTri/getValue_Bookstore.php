<?php 
	$xml = simplexml_load_file("book.xml") or die("Error Cannot create onject");
	echo $xml ->book[0]['category'].'<br>';
	echo $xml ->book[1]->title['lang'];
 ?>