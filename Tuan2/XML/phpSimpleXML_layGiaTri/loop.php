<?php 
	$xml = simplexml_load_file("book.xml") or die("Error");
	foreach($xml->children() as $books){
		echo $books->title['lang'];
		echo '<br>';
	}
 ?>