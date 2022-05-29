<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		PHP File Create/Write
	</title>
</head>
<body>
	<?php 
		$myfile = fopen("newFile.txt", "a") or die("Unable to open file");
		$txt = " John \n";
		fwrite($myfile,$txt);
		$txt = "Mickey \n";
		fwrite($myfile, $txt);
		fclose($myfile);
	 ?>
</body>
</html>