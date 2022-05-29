<?php 
	//new Exception(message, code, previous)
	//
	
	function divide($devidend , $divisor){
		if($divisor == 0){
			throw new Exception("Division by zero", 1);
		}
		return $dividend / $divisor;
	}

	try{
		echo divide(5,0);
	}catch(Exception $ex){
		$code = $ex ->getCode();
		$message = $ex ->getMessage();
		$file = $ex ->getFile();
		$line = $ex ->getLine();

		echo "Exception thrown in $file on line $line: [Code $code] $message";
	}
 ?>