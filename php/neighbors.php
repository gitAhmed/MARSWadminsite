<?php

require_once ("config.php");


$place = $_POST['place'];
$neighbor = $_POST['neighbor'];
$distance = $_POST['distance'];


$sql = "INSERT INTO `place_neighbor`(`placeID`,`placeNeighbor`, `distance`) VALUES ('$place','$neighbor','$distance') ";
mysqli_query($con, $sql) or die('Error, query failed');

header("Location: ../neighborsPage.php?succ= <b>$place, $neighbor<b> successfully Assigned. ");


mysqli_close();


?>
