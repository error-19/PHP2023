<!DOCTYPE html>
<html>
<head>
	<title>Display Page</title>
</head>
<body>
	<h1>Form Data</h1>
	<?php
		if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			echo "<p>Name: $name</p>";
			echo "<p>Email: $email</p>";
		}
	?>
</body>
</html>

