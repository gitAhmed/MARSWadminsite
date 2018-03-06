<?php

require_once ("config.php");


if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "DELETE FROM incentive WHERE id = $id";

mysqli_query($con, $query) or die('Error, query failed');

header("Location: ../incentives.php?succ= <b>$id<b> successfully deleted. ");

}

?>

