<?php 
// Hàm json_decode() được sử dụng để giải mã một đối tượng JSON thành một đối tượng PHP hoặc một mảng liên kết.

	//giải mã dữ liệu JSON thành đối tượng PHP
	$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
	$age = json_decode($jsonobj);
	// var_dump($age)."<br>";

	echo $age->Peter ."<br>";
	echo $age->Ben ."<br>";
	echo $age ->Joe."<br>";

	$arr = json_decode($jsonobj, true);
	echo $arr["Peter"]."<br>";
	echo $arr["Ben"]."<br>";
	echo $arr["Joe"]."<br>";

	foreach($age as $key => $value){
		echo $key. " => " . $value."<br>";
	}
 ?>