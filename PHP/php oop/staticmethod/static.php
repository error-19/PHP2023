<?php
class car{
	public static function carbrand(){
		echo "BMW","<br>";
		echo "Audi";
	}
}
echo car::carbrand();
?>
<?php
class A{
	public static function welcome(){
		echo "My name is Shamim Sorkar";
	}
}
class B{
	public function message(){
		A::welcome();
	}
}
$obj=new B();
echo $obj->message(),"<br>";
?>
<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
Static properties can be called directly - without creating an instance of a class.

Static properties are declared with the static keyword
<?php
 class pi{
public static $value=3;
}
echo pi::$value;
?>
<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
