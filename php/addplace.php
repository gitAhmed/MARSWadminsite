<?php

require_once ("config.php");


$name = $_POST['name'];
$weight = $_POST['weight'];


$sql = "INSERT INTO `place`(`name`, `weight`) VALUES ('$name','$weight') ";
mysqli_query($con, $sql) or die('Error, query failed');

header("Location: ../places.php?succ= <b>$name Place<b> successfully Added. ");


mysqli_close();


?>
