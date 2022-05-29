<!-- <?php 
	class Fruit{
		//Properties
		public $name;
		public $color;

		//method 
		function set_name($name){
			$this ->name = $name;
		}
		function get_name(){
			return $this->name;
		}
		function set_color($color) {
	   		$this->color = $color;
	  	}
	  	function get_color() {
	    	return $this->color;
	  	}
	  
	}

	$apple = new Fruit();
	$banana = new Fruit();
	$apple ->set_name('Apple');
	$apple ->set_color('red');
	$banana ->set_name('Banana');

	echo $apple->get_name();
	echo "<br>";
	echo $banana->get_name();
	echo "<br>";
	echo $apple ->get_color();
	echo "<br>";
	var_dump($apple instanceof Fruit);

 ?> -->

<?php
class Fruits {
  public $name;
  public $color;

function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
 }
function get_name() {
    return $this->name;
  }
function get_color() {
    return $this->color;
  }
}

$apple = new Fruits("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>