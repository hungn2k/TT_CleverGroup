<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validate an Interger</title>
</head>
<body>
	<?php 
		$int = 0;

		if (filter_var($int, FILTER_VALIDATE_INT)=== 0 || !filter_var($int, FILTER_VALIDATE_INT)=== false) {
			echo "Integer is valid";
		}else{
			echo "Integer is not valid";
		}

	 ?>
</body>
</html>