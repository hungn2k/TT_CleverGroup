<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date time</title>
</head>
<body>
	<?php 
		echo "Today is " . date("Y/m/d") . "<br>";
		echo "Today is " . date("Y.m.d") . "<br>";
		echo "Today is " . date("Y-m-d") . "<br>";
		echo "Today is " . date("l")."<br>";
		echo "The time is ". date("h:i:sa"). "<br>";
	 ?>

	 <?php
	 // dat mui gio thanh newyork
		date_default_timezone_set("America/New_York");
		echo "The time is " . date("h:i:sa"). "<br>";
	?>

	<?php
	// tao ngay voi mktime() mktime(hour, minute, second, month, day, year)
	$d=mktime(11, 14, 54, 8, 12, 2014);
	echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";
	?>

	<?php
	//strtotime(time, now)
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";
	?>

	<?php
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	?>

	<?php 
	$startdate = strtotime("Saturday");
	$endday = strtotime("+6 weeks", $startdate);
	echo date("Y/m/d", $endday)."<br>";
	?>

	<?php
	$startdate = strtotime("Saturday");
	$enddate = strtotime("+6 weeks", $startdate);

	while ($startdate < $enddate) {
	  echo date("M d", $startdate) . "<br>";
	  $startdate = strtotime("+1 week", $startdate);
	}
	?>

	<?php
	$d1=strtotime("July 04");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 4th of July.";
	?>
</body>
</html>