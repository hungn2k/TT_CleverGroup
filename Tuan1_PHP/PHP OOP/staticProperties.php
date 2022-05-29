<?php 

	class pi{
		public static $value =3.14159;
	}

	class x extends pi{
		public function xStatic(){
			return parent :: $value;
		}
	}

	//get value of static property directly via child class
	echo x::$value;

	//get value of static property via xStatic() method
	$x = new x();
	echo $x->xStatic();
 ?>