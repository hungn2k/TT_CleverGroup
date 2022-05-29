<?php 
	trait message1 {
		public function msg1(){
			echo "oop1";
		}
	}

	trait message2{
		public function msg2(){
			echo "oop2";
		}
	}

	class Welcome {
		use message1;
	}

	class welcome2{
		use message1, message2;
	}

	$obj = new Welcome();
	$obj->msg1();
	echo "<br>";
	$obj2 = new Welcome2();
	$obj2->msg1();
	$obj2->msg2();

 ?>