<?php
session_start();
$_SESSION['data'] = $_POST['data'];
header('Location: form2.php');
?>
