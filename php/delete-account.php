<?php

require_once ("config.php");


if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];
$type = $_GET['type'];

if($type=='student'){
$query = "DELETE FROM student WHERE id = $id";
}

else {
	$query = "DELETE FROM instructor WHERE id = $id";
}
mysqli_query($con, $query) or die('Error, query failed');

header("Location: ../accounts.php?succ= <b>$id<b> successfully deleted. ");

}

?>

