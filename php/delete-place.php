<?php

require_once ("config.php");



$id = $_GET['id'];

$query = "DELETE FROM place WHERE id = $id";

mysqli_query($con, $query) or die('Error, query failed');

header("Location: ../places.php?succ= <b>$id<b> successfully deleted. ");



?>

