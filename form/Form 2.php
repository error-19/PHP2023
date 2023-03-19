<?php
session_start();
$data = $_SESSION['data'];
?>
<p>Passed data: <?php echo $data; ?></p>
