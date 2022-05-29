<?php 
	class Goodbye{
		const Leave_message = " Thank you for visiting";

		public function byebye(){
			echo self :: Leave_message;
		}
	}

	$goodbye = new Goodbye();
	$goodbye->byebye();


 ?>