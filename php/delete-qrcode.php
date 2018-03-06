<?php

require_once ("config.php");



$id = $_GET['id'];

$query = "DELETE FROM QRCode WHERE qr_id = $id";

mysqli_query($con, $query) or die('Error, query failed');

header("Location: ../qrcodesPage.php?succ= <b>$id<b> successfully deleted. ");



?>

