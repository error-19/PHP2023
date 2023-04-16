<?php
class fruit{
	public $name;
	public $color;
	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
}
$apple=new fruit();
$banana=new fruit();
$apple->set_name('apple');
$banana->set_name('banana');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

//another example of php oop
<?php
class ruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new ruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
The $this keyword refers to the current object, and is only available inside methods.
So, where can we change the value of the $name property? There are two ways:

1. Inside the class (by adding a set_name() method and use $this)
<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
?>
2. Outside the class (by directly changing the property value):
<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>

