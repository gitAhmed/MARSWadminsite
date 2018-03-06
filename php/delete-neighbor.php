<?php

require_once ("config.php");



$id = $_GET['id'];

$query = "DELETE FROM place_neighbor WHERE placeID = $id";

mysqli_query($con, $query) or die('Error, query failed');

header("Location: ../neighborsPage.php?succ= <b>$id<b> successfully deleted. ");



?>

