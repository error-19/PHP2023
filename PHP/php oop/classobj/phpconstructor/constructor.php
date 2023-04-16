<?php
class fruit{
	public $name;
	public $color;
	function __construct($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
}
$apple=new fruit("apple");
echo $apple->get_name();
?>
<?php
class Frui {
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

$apple = new Frui("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
<?php
class Fru {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fru("Apple", "red");
?>
