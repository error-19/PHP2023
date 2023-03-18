<?php
//  print echo'My Name is Shamim Sorkar';
//  pass by reference
$x=5;
$y=$x;
$z=6;
$x=&$z;
echo 'shamim' . $x;
?>

<!-- global variable -->
<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest1() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<!-- PHP The global Keyword -->


<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<!-- Global array -->
<?php
$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // outputs 15
?>


<!-- PHP The static Keyword -->
<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest4();
myTest4();
myTest4();
?>
<!-- PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen. -->
<!-- The differences are small: echo has no re
turn value while print has a return value of 1 so it c
an be used in expressions. echo can take multiple para
meters (although such usage is rare) while print can t
ake one argument. echo is marginally faster than print. -->
<!-- 
The echo statement can be used with or without parentheses: echo or echo(). -->

<!-- PHP String -->
<!-- A string can be any text inside quotes. You can use single or double quotes: -->
<?php
$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo '<br>';
echo $y;
echo "<br>"
?>
<!-- PHP Array
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value: -->
<?php  
$cars = array("Volvo","BMW","Toyota","Apace");
var_dump($cars);
?>  


 //php object
 <?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!-- strlen() - Return the Length of a String -->
<?php
echo strlen("Hello world!"); // outputs 12
?>

<!-- str_word_count() - Count Words in a String -->
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
<!-- strrev() - Reverse a String -->
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
<!-- strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. -->
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
<!-- str_replace() - Replace Text Within a String -->
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
<!-- PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int() -->
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>

<!-- PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
 PHP_FLOAT_MAX - The smallest representable negative floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float() -->
<?php
$x = 10.365;
var_dump(is_float($x));
?>
<!-- PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()
However, the PHP var_dump() function returns the data type and value: -->
<?php
$x = 1.9e411;
var_dump($x);
?>
<!-- PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise. -->
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

<!-- PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type. -->

<!-- The (int), (integer), or intval() function are often used to convert a value to an integer. -->
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
<!-- PHP pi() Function -->
<?php
echo(pi()); // returns 3.1415926535898
?>
<!-- PHP min() and max() Functions
The min() and max() functions can be used to find the lowest or highest value in a list of arguments: -->
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
<!-- PHP abs() Function
The abs() function returns the absolute (positive) value of a number: -->
<?php
echo(abs(-6.7));  // returns 6.7
?>
<!-- PHP sqrt() Function
The sqrt() function returns the square root of a number: -->
<?php
echo(sqrt(64));  // returns 8
?>
<!-- PHP round() Function
The round() function rounds a floating-point number to its nearest integer: -->
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
<!-- Random Numbers
The rand() function generates a random number: -->
<?php
echo(rand());
?>
<?php
echo(rand(10, 100));
?>
//constant
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
<!-- PHP Constant Arrays -->
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<!-- 
Constants are Global -->
<?php
define("GREETIN", "Welcome to W3Schools.com!");

function myTes() {
  echo GREETIN;
}
 
myTes();
?>
<!-- Exponentiation -->
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>
<!-- Returns true if $x is equal to $y -->
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?> 
<!-- Returns true if $x is equal to $y, and they are of the same type -->
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?> 
<!-- Returns true if $x is not equal to $y, or they are not of the same type -->
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  

<?php
$t = date("H");

if ($t > "2") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
<!-- The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
<!-- PHP Superglobal - $GLOBALS -->
<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>
<!-- $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. -->
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<!-- Create an Array in PHP
In PHP, the array() function is used to create an array:

array();
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
<!-- PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota"; -->
<!-- Loop Through an Indexed Array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<!-- PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43"; -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<!-- PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
?>
<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
?>
<!-- Sort Array (Ascending Order), According to Value - asort() -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>
<!-- Sort Array (Ascending Order), According to Key - ksort() -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>
<!-- Sort Array (Descending Order), According to Value - arsort() -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
?>
<!-- Sort Array (Descending Order), According to Key - krsort() -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
?>
<!-- PHP $_REQUEST
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_REQUEST to collect the value of the input field: -->


  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
<!-- PHP $_POST
PHP $_POST is a PHP super global variable which is used to collect form d
ata after submitting an HTML form with method="post". $_POST is also widely used to pass variables. -->


</body>
</html>



