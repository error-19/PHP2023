A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:
<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>