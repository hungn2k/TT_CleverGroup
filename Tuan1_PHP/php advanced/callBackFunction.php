<?php 
	function my_callback($item){

		return strlen($item);
	}

	$strings = ['apple','orange', 'banana', 'coconut'];
	// $lengths = array_map("my_callback", $strings);
	$lengths = array_map(function($item){return strlen($item);}, $strings);

	print_r($lengths);

	// tinh do dai chuoi string bang callback
 ?>