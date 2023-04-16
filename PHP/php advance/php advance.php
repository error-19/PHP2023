PHP Date and Time
The PHP date() function is used to format a date and/or a time.
<!DOCTYPE html>
<html>
<body>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
&copy; 2010-<?php echo date("Y");?>

</body>
</htm
